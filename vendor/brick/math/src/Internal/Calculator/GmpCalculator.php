<?php

declare(strict_types=1);

namespace Brick\Math\Internal\Calculator;

use Brick\Math\Internal\Calculator;
use function gmp_add;
use function gmp_and;
use function gmp_div_q;
use function gmp_div_qr;
use function gmp_div_r;
use function gmp_gcd;
use function gmp_init;
use function gmp_invert;
use function gmp_mul;
use function gmp_or;
use function gmp_pow;
use function gmp_powm;
use function gmp_sqrt;
use function gmp_strval;
use function gmp_sub;
use function gmp_xor;

/**
 * Calculator implementation built around the GMP library.
 *
 * @internal
 *
 * @psalm-immutable
 */
class GmpCalculator extends Calculator
{
    public function add(string $a, string $b) : string
    {
        return gmp_strval(gmp_add($a, $b));
    }

    public function sub(string $a, string $b) : string
    {
        return gmp_strval(gmp_sub($a, $b));
    }

    public function mul(string $a, string $b) : string
    {
        return gmp_strval(gmp_mul($a, $b));
    }

    public function divQ(string $a, string $b) : string
    {
        return gmp_strval(gmp_div_q($a, $b));
    }

    public function divR(string $a, string $b) : string
    {
        return gmp_strval(gmp_div_r($a, $b));
    }

    public function divQR(string $a, string $b) : array
    {
        [$q, $r] = gmp_div_qr($a, $b);

        return [
            gmp_strval($q),
            gmp_strval($r)
        ];
    }

    public function pow(string $a, int $e) : string
    {
        return gmp_strval(gmp_pow($a, $e));
    }

    public function modInverse(string $x, string $m) : ?string
    {
        $result = gmp_invert($x, $m);

        if ($result === false) {
            return null;
        }

        return gmp_strval($result);
    }

    public function modPow(string $base, string $exp, string $mod) : string
    {
        return gmp_strval(gmp_powm($base, $exp, $mod));
    }

    public function gcd(string $a, string $b) : string
    {
        return gmp_strval(gmp_gcd($a, $b));
    }

    public function fromBase(string $number, int $base) : string
    {
        return gmp_strval(gmp_init($number, $base));
    }

    public function toBase(string $number, int $base) : string
    {
        return gmp_strval($number, $base);
    }

    public function and(string $a, string $b) : string
    {
        return gmp_strval(gmp_and($a, $b));
    }

    public function or(string $a, string $b) : string
    {
        return gmp_strval(gmp_or($a, $b));
    }

    public function xor(string $a, string $b) : string
    {
        return gmp_strval(gmp_xor($a, $b));
    }

    public function sqrt(string $n) : string
    {
        return gmp_strval(gmp_sqrt($n));
    }
}
