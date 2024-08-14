<?php
//enum is used to group constants
enum CoffeeSize
{
    case SMALL;
    case MEDIUM;
    case LARGE;
}
function orderCoffee(CoffeeSize $size)
{
    return match($size) {
        CoffeeSize::SMALL => "Ordered a small coffee",
        CoffeeSize::MEDIUM => "Ordered a medium coffee",
        CoffeeSize::LARGE => "Ordered a large coffee",
    };
}

echo orderCoffee(CoffeeSize::SMALL);  // Outputs: Ordered a medium coffee
