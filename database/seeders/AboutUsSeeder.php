<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AboutUsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('about_us')->insert([
            'id' => 1,
            'banner_text' => 'Excellent Healthcare in Hyderabad',
            'vision' => 'Our common goal is to provide top-notch tertiary care health services that are affordable and tailored to meet the specific needs of people in the region and beyond. We aim to create a leading healthcare institution that will provide the best possible care for all medical conditions across all our specializations.',
            'mission' => 'At our healthcare facility, we strive to provide top-notch medical care through our exceptional medical and operational services. Our ultimate goal is to improve the health and well-being of our community by providing leadership and advocacy for better healthcare. Join us in our mission to create a better and healthier world for all!',
            'chairman_desk' => 'At STAR Hospitals, we are dedicated to upholding our tradition of high standards of team excellence in patient-centered care, teaching, and research. Our expert team of physicians, nurses, and healthcare professionals work tirelessly to provide the highest standards of medical treatment to our patients. Our multidisciplinary services offer comprehensive and state-of-the-art medical care, allowing for cross-specialty consultation and ensuring that each patient receives the best possible treatment.
            Located at Banjara Hills and Financial District, Hyderabad, Star Hospitals is committed to providing ethical and personalized care within an infrastructure on par with the best institutions around the world. Our primary goal is to put our patients first, which we achieve through teamwork, clinical excellence, and compassionate care. We have made it our mission to ensure that our services and facilities are affordable and accessible to all sectors of society. Established by a team of renowned medical specialists, our hospital is built on a foundation of empathy, which translates into a lifelong commitment to serving the community. Our caring and expert medical and nursing team embodies the values of Empathy, Expertise, and Excellence, which are at the heart of all that we do.',
            'title' => '14 Years of Star Hospitals',
            'description' => 'Star Hospitals is a leading provider of healthcare services in Hyderabad. We offer a wide range of medical services and specializations. Our team of highly skilled specialists and medical professionals are committed to providing compassionate care to our patients. Our focus lies on clinical excellence, patient safety, and personalized care. We have earned a reputation as one of the best multi-specialty hospitals in Hyderabad due to our patient-centric approach.
            At Star Hospitals, we have a state-of-the-art facility and are equipped with cutting-edge tools. This helps us provide a wide range of services to our patients. These services include advanced imaging and diagnostics, modern surgical interventions, and emergency services, apart from others. We offer our patients comfort and complete care at the same time. We also keep the patients’ families well-informed about all the procedures when the treatment is going on so that they are able to understand and make informed decisions. With our strong commitment to patient-centric care, clinical research, and community outreach, we are dedicated to providing all medical help necessary for our patients to improve their health and well-being.
            ',
        ]);
    }
}
