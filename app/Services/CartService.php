<?php

namespace App\Services;

use App\Models\Food;
use App\Repositories\Interfaces\CartInterface;
use App\Repositories\Interfaces\PromotionInterface;
use App\Repositories\Interfaces\StoreInterface;
use Illuminate\Support\Facades\DB;

class CartService
{
    protected $cart, $store, $promotion;

    public function __construct(
        CartInterface      $cart,
        StoreInterface     $store,
        PromotionInterface $promotion
    )
    {
        $this->cart = $cart;
        $this->store = $store;
        $this->promotion = $promotion;
    }

    public function getList()
    {
        $carts = $this->cart->getList(auth()->user());
        $totalInfo = $this->getTotalCart($carts);
        return collect(['cart_list' => $carts])->merge($totalInfo);
    }

    public function update($request)
    {
        $detail = $this->cart->update(Food::find($request['food']), $request['action'] ?? 1);
        $detail['pivot']['quantity'] += $request['action'] ?? 1;
        $detail['pivot'] = $detail['pivot']->only('quantity');
        $carts = $this->cart->getList(auth()->user());
        $totalInfo = $this->getTotalCart($carts);
        return collect(['cart_update' => $detail])->merge($totalInfo);
    }

    public function delete($foodId)
    {
        return $this->cart->delete($foodId ?? -1);
    }

    protected function getTotalCart($carts)
    {
        $totalMoney = 0;
        $total = 0;
        foreach ($carts as $cart) {
            $totalMoney += $cart->discount * $cart->pivot->quantity;
            $total += $cart->pivot->quantity;
        }
        return [
            'total_money' => $totalMoney,
            'total' => $total
        ];
    }
}