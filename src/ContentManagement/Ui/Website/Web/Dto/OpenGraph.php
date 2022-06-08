<?php

namespace App\ContentManagement\Ui\Website\Web\Dto;

use Library\Utils\View;

class OpenGraph extends View
{
    public ?string $title;

    public ?string $description;

    public ?string $image;
}
