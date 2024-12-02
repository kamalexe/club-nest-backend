<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Club;
use Faker\Factory as Faker;


class ClubSeeder extends Seeder
{

    public function run(): void
    {
        // Club::factory(5)->create();
        $faker = Faker::create();
        $clubs = [
            [
                'name' => 'Coding Club',
                'description' => ' A coding club is a community or organization where individuals with an interest in programming and computer science come together to learn, collaborate, and engage in coding-related activities. Members of coding clubs have the opportunity to collaborate on coding projects, share ideas, and work together on coding challenges. Coding clubs often offer resources and guidance for members seeking to advance their careers in the technology industry. Coding clubs aim to create inclusive environments, welcoming individuals from diverse backgrounds and skill levels. Efforts may be made to promote diversity, equity, and inclusion within the club.

Coding clubs foster a sense of community among individuals who share a passion for coding. Regular meetups, discussions, and social events contribute to building a supportive and collaborative community. Some coding clubs invite guest speakers, industry professionals, or alumni to share insights into the real-world applications of coding skills. Workshops and seminars may focus on relevant industry trends and technologies. Coding clubs aim to create inclusive environments, welcoming individuals from diverse backgrounds and skill levels. Efforts may be made to promote diversity, equity, and inclusion within the club.

Coding clubs provide a supportive environment for members to enhance their programming skills. Workshops, tutorials, and coding challenges are often organized to facilitate continuous learning. Coding clubs frequently organize or participate in coding competitions, hackathons, and coding challenges. These events offer members a chance to apply their skills in a competitive and time-constrained environment. If you are interested in joining or starting a coding club, consider checking with local educational institutions, exploring online platforms, or connecting with tech communities in your area. Coding clubs are often open to individuals of all skill levels, from beginners to experienced developers. ',
                'image' => $faker->imageUrl(400, 400, 'tech', true, 'Tech Club'),
            ],
            [
                'name' => 'AI-IoT Club',
                'description' => 'An AI (Artificial Intelligence) and IoT (Internet of Things) club is a community or group of individuals who share a common interest in the fields of artificial intelligence and the Internet of Things. These clubs are often formed in educational institutions, such as schools, colleges, and universities, as well as in professional or community settings.',
                'image' => $faker->imageUrl(400, 400, 'sports', true, 'Sports Club'),
            ],
            [
                'name' => 'Gate Club',
                'description' => 'GATE club offers exam resources, study groups, expert guidance, networking, motivation, mock tests, updates, career insights, and discounts. Joining enhances preparation, fosters a supportive community, and adds a valuable credential to your resume.',
                'image' => $faker->imageUrl(400, 400, 'music', true, 'Music Club'),
            ],
            [
                'name' => 'Robotics Club',
                'description' => "Ready to embark on a journey of innovation and discovery? Join the Robotics Club and be part of a community that encourages curiosity, creativity, and collaboration. Together, let's explore the limitless possibilities of robotics!The Robotics Club is open to students of all skill levels, from beginners curious about robotics to experienced enthusiasts. Whether you're majoring in engineering, computer science, or just have a keen interest in technology, there's a place for you in our club.",
                'image' => $faker->imageUrl(400, 400, 'music', true, 'Music Club'),
            ],
            [
                'name' => 'Sports Club',
                'description' => 'Sports clubs offer a dynamic platform for gamers, fostering skill enhancement and teamwork through professional training and competitive play. These clubs provide a supportive community, offering opportunities for mentorship and networking. Players benefit from sponsorships, exposure, and global recognition.',
                'image' => $faker->imageUrl(400, 400, 'music', true, 'Music Club'),
            ]
        ];
        foreach ($clubs as $club) {
            Club::create($club);
        }
    }
}
