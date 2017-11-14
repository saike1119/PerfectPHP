<?php
$float1 = 1.2;
$float2 = 1.2e3;
$float3 = floatval("1.2"); //文字列をfloatにキャスト
$float4 = (float)"1.2";

var_dump($float1, $float2, $float3, $float4);