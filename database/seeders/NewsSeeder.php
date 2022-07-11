<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\News;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $news = [
            [
               'title'=>'New Hack The Box CTF Platform',
               'slug'=>'new-hack-the-box-ctf-platform',
               'content'=>'At Hack The Box we have been delivering and organizing CTF events for our community, partners, and clients since 2017, always ensuring top-notch content to train on and a next-level gamified environment. The competitive vibe every event is giving can push players to go the extra mile, ending up being one of the best upskilling activities for individuals, companies, and other organizations. Some impressive numbers of our CTF platform so far:',
               'created_at'=>'2022-06-09'
            ],
            [
               'title'=>'Hack The Box @ Infosecurity Europe 2022',
               'slug'=>'hack-the-box-infosecurity-europe-2022',
               'content'=>'Come and see the Hack The Box team on stand T10 at this years Infosecurity Europe, taking place in London between June 21-23, 2022. 

               Join us for a three-day deep dive into all things cybersecurity, where well be on hand to all things cyber skills in your organization - including everything from sourcing and assessing external hires to specializing existing team members, and everything in between.',
               'created_at'=>'2022-06-06'
            ],
            [
               'title'=>'Hack The Box Teams Up with CREST for Cybersecurity Skills Development',
               'slug'=>'hack-the-box-teams-up-with-crest',
               'content'=>'Were excited to provide study support for CREST exams, build a greater sense of global community, and map current content against the CREST exams to create fully bespoke CREST labs.

               Hack The Box,  the leading cybersecurity training and upskilling platform, is partnering with CREST, the international not-for-profit cybersecurity accreditation and certification body, to support CREST member professionals to develop their offensive security skills.  The two organizations will provide test labs tailored toward individuals who are planning to take CREST penetration testing and red teaming examinations.',
               'created_at'=>'2022-05-10'
            ],
        ]; 
  
        foreach ($news as $key => $value) {
            News::create($value);
        }
    }
}
