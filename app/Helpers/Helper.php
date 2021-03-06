<?php
if (!function_exists('currency_format')) {
    function currency_format($number, $suffix = 'đ')
    {
        if (!empty($number)) {
            return number_format($number, 0, '.', ',') . "{$suffix}";
        }
        return '0đ';
    }
}

if (!function_exists('currency_after_promotions')) {
    function currency_after_promotions($price, $discount, $maxDiscount, $isPercent = true)
    {
        if ($isPercent) {
            $discount = $price * $discount / 100;
            if (!empty($maxDiscount)) {
                return $discount < $maxDiscount ? currency_format($price - $discount) : currency_format($price - $maxDiscount);
            }
            return currency_format($price - $discount);
        } else {
            return currency_format($price - $discount);
        }
    }
}


if (!function_exists('discount_calculate')) {
    function discount_calculate($price, $discount, $maxDiscount, $isPercent = true)
    {
        if ($isPercent) {
            $discount = $price * $discount / 100;
            if (!empty($maxDiscount)) {
                return $discount < $maxDiscount ? $price - $discount : $price - $maxDiscount;
            }
            return $price - $discount;
        } else {
            return $price - $discount;
        }
    }
}

if (!function_exists('vi_not_mark')) {
    function vi_not_mark($str)
    {
        $str = preg_replace("/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)/", "a", $str);
        $str = preg_replace("/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/", "e", $str);
        $str = preg_replace("/(ì|í|ị|ỉ|ĩ)/", "i", $str);
        $str = preg_replace("/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)/", "o", $str);
        $str = preg_replace("/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/", "u", $str);
        $str = preg_replace("/(ỳ|ý|ỵ|ỷ|ỹ)/", "y", $str);
        $str = preg_replace("/(đ)/", "d", $str);
        $str = preg_replace("/(À|Á|Ạ|Ả|Ã|Â|Ầ|Ấ|Ậ|Ẩ|Ẫ|Ă|Ằ|Ắ|Ặ|Ẳ|Ẵ)/", "A", $str);
        $str = preg_replace("/(È|É|Ẹ|Ẻ|Ẽ|Ê|Ề|Ế|Ệ|Ể|Ễ)/", "E", $str);
        $str = preg_replace("/(Ì|Í|Ị|Ỉ|Ĩ)/", "I", $str);
        $str = preg_replace("/(Ò|Ó|Ọ|Ỏ|Õ|Ô|Ồ|Ố|Ộ|Ổ|Ỗ|Ơ|Ờ|Ớ|Ợ|Ở|Ỡ)/", "O", $str);
        $str = preg_replace("/(Ù|Ú|Ụ|Ủ|Ũ|Ư|Ừ|Ứ|Ự|Ử|Ữ)/", "U", $str);
        $str = preg_replace("/(Ỳ|Ý|Ỵ|Ỷ|Ỹ)/", "Y", $str);
        $str = preg_replace("/(Đ)/", "D", $str);
        $str = str_replace(" ", "-", str_replace("&*#39;", "", $str));
        return strtolower($str);
    }
}

if (!function_exists('paginate')) {
    function paginate($lastPage, $currentPage, $path)
    {
        return view('/pages/admins/paginate-control',
            [
                'lastPage' => $lastPage,
                'currentPage' => $currentPage,
                'path' => $path
            ]
        );
    }
}


if (!function_exists('access_token')) {
    function access_token()
    {
        return Illuminate\Support\Facades\Cookie::get('access_token');
    }
}

