<?php

namespace App\Services;

use App\Repositories\Interfaces\FoodInterface;
use App\Repositories\Interfaces\FoodTagInterface;
use App\Repositories\Interfaces\PromotionInterface;

class FoodService
{
    protected $food, $foodTab, $promotion;

    public function __construct(FoodInterface $food, FoodTagInterface $foodTab, PromotionInterface $promotion)
    {
        $this->food = $food;
        $this->foodTab = $foodTab;
        $this->promotion = $promotion;
    }

    public function getFoodList($request)
    {
        $foodsList = $this->food->getFoods(
            $request->store ?? -1,
            $request->group ?? "",
            $request->sort ?? "created_at",
            $request->sort_type ?? -1,
            $request->tags ?? [],
            $request->page ?? 1,
            $request->limit ?? 24,
            $request->user ?? -1,
            $request->search ?? ''
        );

        return $foodsList;
    }

    public function getPromotionInitial($limit = 12)
    {
        $promotions = $this->promotion->getPromotions($limit);

        $promotionIdList = $promotions;
        $promotionIdList = $promotionIdList->pluck('food_id')->toArray();

        $foodsList = $this->food->findByIds($promotionIdList);

        $this->addDiscount($foodsList, $promotions);

        return [
            'food_promotions' => $foodsList,
        ];
    }

    protected function addDiscount($foodsList, $promotions)
    {
        foreach ($foodsList as $food) {
            $promotion = $promotions->where('food_id', $food->id)->first();
            if (!empty($promotion)) {
                $priceAfterDiscount = discount_calculate(
                    $food->price,
                    $promotion->discount,
                    $promotion->max_discount,
                    $promotion->is_percent === 1
                );
                $food->setAttribute('discount', [
                    'value' => $priceAfterDiscount,
                    'start_time' => $promotion->start_time,
                    'end_time' => $promotion->end_time,
                ]);
            }
        }
    }
}
