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
            "fullDesc" => "YNFEST is an internal competition within BCA trainee and student.
            The objective of the competition is to create an innovation that might benefit BCA customer, worker, or trainee.
            In this competition, my team proposed a program called SYNERGY(Save Your Energy), where BCA students who live in the dormitory will compete in an energy saving competition."
        ],
        [
            "id"=>2,
            "dir" => "se.jpg",
            "title" => "Software Engineer",
            "desc" => "BLI Management Website 2022",
            "category" => "Project",
            "fullDesc" => "BLI Management Website is a website aimed to help BLI workers to do daily tasks such as taking attendance, viewing schedules, viewing news, filing complaines, and filling self assesment.
            The website was built within the span of 5 months (October 2022 - February 2023.
            My role in the team was coding the backend (PHP) and maintain the quality of the website."
        ],
        [
            "id"=>3,
            "dir" => "komti.jpg",
            "title" => "Class Leader",
            "desc" => "The 2nd Term of PPTI 12 2021-2022",
            "category" => "Organization",
            "fullDesc" => "In the 2nd term of PPTI 12 (December 2021 - May 2022), I was given an opportunity to lead the class.
            Class leader usually work on coordinating class schedule, leading class activity, and make organizational decision in the class."
        ],
        [
            "id"=>4,
            "dir" => "bpa-comp.jpg",
            "title" => "2nd Place",
            "desc" => "Graphic Design Promotion
            Delaware State BPA 2020",
            "category" => "Competition",
            "fullDesc" => "Business Professionals of America (BPA) is a national high school student organization in United States that focus on creating the next generation of businessman and businesswoman.
            Every year, a set of competition related to business will be held in BPA to get a national champion starting from state competition.
            In February 2020, I placed 2nd in the state Graphic Design Promotion competition--a competition where we designed promotional logo and banner for BPA."
        ],
        [
            "id"=>5,
            "dir" => "yes.jpeg",
            "title" => "Participant",
            "desc" => "Kennedy-Lugar Youth Exchange and Study (YES) Program 2019-2020",
            "category" => "Organization",
            "fullDesc" => "KL-YES Program is an exchange program that is aimed to create a bridge between USA and countries in which the majority of the citizen is moslem.
            In August 2019 - April 2020, I was given the opportunity to participate in this program.
            I was hosted in Delaware State and get to attend American high school in Sussex Central High School for one academic year."
        ],
        [
            "id"=>6,
            "dir" => "i3f.jpeg",
            "title" => "Silver Medal",
            "desc" => "Indonesia International Invention Festival (I3F) 2019",
            "category" => "Competition",
            "fullDesc" => "I3F is an international invention festival that was held in Malang City, East Java.
            In this competition, my team propose a design of playground that will automatically detect cigarette smoke and filter it so that the air within the playground is safe for kids to play at.
            After series of expo and presentation, my team was awarded Silver Medal for this innovation."
        ],
        [
            "id"=>7,
            "dir" => "tgc.jpg",
            "title" => "3rd Place",
            "desc" => "TGC In Action Essay Competition IPB University 2018",
            "category" => "Competition",
            "fullDesc" => "Tree Grower Community (TGC) is a college student organization in IPB University.
            In 2018, they held an essay competition with Sustainable Community as the team.
            I proposed the idea of building tax system that required the taxpayer to give back to the nature by planting a tree.
            After going through the final presentation, I placed 3rd in this competition."
        ]
        ];

    public static function all(){
        return collect(self::$card_lists);
    }

}
