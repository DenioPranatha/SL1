<?php

namespace App\Models;

class Profile
{
    private static $card_lists = [
        [
            "id"=>1,
            "dir" => "ynfest.jpeg",
            "title" => "Top 5",
            "desc" => "Young Innovation Festival BCA 2022",
            "category" => "Competition",
            "fullDesc" => ""
        ],
        [
            "id"=>2,
            "dir" => "se.jpg",
            "title" => "Software Engineer",
            "desc" => "BLI Management Website 2022",
            "category" => "Project",
            "fullDesc" => ""
        ],
        [
            "id"=>3,
            "dir" => "komti.jpg",
            "title" => "Class Leader",
            "desc" => "The 2nd Term of PPTI 12 2021-2022",
            "category" => "Organization",
            "fullDesc" => ""
        ],
        [
            "id"=>4,
            "dir" => "bpa-comp.jpg",
            "title" => "2nd Place",
            "desc" => "Graphic Design Promotion
            Delaware State BPA 2020",
            "category" => "Competition",
            "fullDesc" => ""
        ],
        [
            "id"=>5,
            "dir" => "yes.jpeg",
            "title" => "Participant",
            "desc" => "Kennedy-Lugar Youth Exchange and Study (YES) Program 2019-2020",
            "category" => "Organization",
            "fullDesc" => ""
        ],
        [
            "id"=>6,
            "dir" => "i3f.jpeg",
            "title" => "Silver Medal",
            "desc" => "Indonesia International Invention Festival (13F) 2019",
            "category" => "Competition",
            "fullDesc" => ""
        ],
        [
            "id"=>7,
            "dir" => "tgc.jpg",
            "title" => "3rd Place",
            "desc" => "TGC In Action Essay Competition IPB University 2018",
            "category" => "Competition",
            "fullDesc" => ""
        ]
        ];

    public static function all(){
        return collect(self::$card_lists);
    }

}
