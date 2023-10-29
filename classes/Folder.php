<?php
class Folder
{
    public $id;
    public $title;
    public $updateDate;
    public $creationDate;
    public $isPublic;
    public $isFavourite;
    public $colour;

    public function __construct(
        int $id,
        string $title,
        DateTime $updateDate,
        DateTime $creationDate,
        bool $isPublic = true,
        bool $isFavourite = false,
        string $colour = "#FFFFFF",
    ) {
        $this->id = $id;
        $this->title = $title;
        $this->colour = $colour;
        $this->isPublic = $isPublic;
        $this->updateDate = $updateDate;
        $this->isFavourite = $isFavourite;
        $this->creationDate = $creationDate;
    }
}
?>