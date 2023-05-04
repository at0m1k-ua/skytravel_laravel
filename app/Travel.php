<?php

namespace App;
use DateTime;

class Travel
{

    private const MONTHS = array(
        "січня",
        "лютого",
        "березня",
        "квітня",
        "травня",
        "червня",
        "липня",
        "серпня",
        "вересня",
        "жовтня",
        "листопада",
        "грудня",
    );

    public int $id;
    public string $name, $nameJapanese;
    public string $description;
    public array $cities;
    public bool $isPremiere;
    public string $cardImageUrl, $pageImageUrl;
    public DateTime $startDate, $endDate;
    public int $price;

    public function __construct(int      $id,
                                string   $name,
                                string   $nameJapanese,
                                string   $description,
                                array    $cities,
                                bool     $isPremiere,
                                string   $cardImageUrl,
                                string   $pageImageUrl,
                                DateTime $startDate,
                                DateTime $endDate,
                                int      $price)
    {
        $this->id = $id;
        $this->name = $name;
        $this->nameJapanese = $nameJapanese;
        $this->description = $description;
        $this->cities = $cities;
        $this->isPremiere = $isPremiere;
        $this->cardImageUrl = $cardImageUrl;
        $this->pageImageUrl = $pageImageUrl;
        $this->startDate = $startDate;
        $this->endDate = $endDate;
        $this->price = $price;
    }

    public function getCitiesString(): string
    {
        return implode(' • ', $this->cities);
    }

    private static function dateToString(DateTime $dateTime): string
    {
        return $dateTime->format("d") . " " . Travel::MONTHS[$dateTime->format("m") - 1];
    }

    public function getDatesString(): string
    {
        $startDateString = $this::dateToString($this->startDate);
        $endDateString = $this::dateToString($this->endDate);
        return "{$startDateString} - {$endDateString}";
    }

    public function getDatesIntervalDays(): int
    {
        return $this->endDate->diff($this->startDate)->days;
    }
}
