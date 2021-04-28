<?php

function show()
{
    static $count = 0;
    return ++$count;
}

print show();
print show();
print show();