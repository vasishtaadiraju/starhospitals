<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CentresOfExcellenceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('centre_of_excellences')->insert(
            [
                'id' => 1,
                'name' => 'Cardiac Sciences',
                'banner_text' => 'Leading Heart Specialists Offering Comprehensive Cardiac Care in Hyderabad',
                'title' => 'Best Cardiac Center in Hyderabad',
                'description' => '<div>The Cardiac Center of Excellence at STAR Hospitals is a state-of-the-art facility that dedicatedly provides world-class cardiac care. We have highly trained and experienced cardiac specialists adept at using the latest medical technology and techniques to diagnose and treat cardiac conditions. We offer a full spectrum of cardiac services for accurate diagnosis, timely intervention, and surgery with comprehensive care. We are equipped with advanced imaging techniques like 3D echo, cardiac CT, and MRI. We offer a range of cardiac rehabilitation programs to help our patients recover from cardiac illnesses and improve their health.<br><br>Apart from this, we also have highly trained staff who are committed to providing compassionate and personalized care to every patient we have. Adopting a multidisciplinary approach, our cardiologists and other staff work closely with other departments to provide our patients with treatment plans designed for their unique needs. Patients at our cardiac center also get access to several support services like nutrition, counseling, and stress management. Overall, we are a leading facility for cardiac care, striving to help our patients achieve the best possible outcomes.</div>',
                'our_doctors_text' => 'Find the most experienced and skilled cardiology experts in Hyderabad at STAR Hospitals. Meet our cardiologists.',
                'reviews_text' => 'You can trust STAR Hospitals with our patient-centric approach for all your healthcare needs. Here is what our patients have to say about us.',
                'media_text' => 'Stay up-to-date about the Cardiac Department at STAR Hospitals with the latest news. Check it out here.',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 2,
                'name' => 'Renal Sciences',
                'banner_text' => 'Leading Nephrologists in Hyderabad for Renal Care',
                'title' => 'Leading Center for Renal Disorders in Hyderabad',
                'description' => '<div>The Renal Center of Excellence at STAR Hospitals is a specialized facility that provides comprehensive care to all patients with kidney disorders. Our renal center is staffed with highly skilled nephrologists, dialysis technicians, pediatric nephrologists, and support staff. They provide compassionate care to each patient. With advanced medical technology at our disposal and the latest dialysis machines and diagnostic equipment, we can accurately diagnose and treat a wide range of kidney-related conditions. We also offer services to help our patients manage their disease. This includes dietary counseling, medication management, and support services.<br><br>Our Renal Center of Excellence offers a variety of treatment options as well. These include kidney transplantation and minimally invasive surgeries. Our team of qualified transplant surgeons can provide complete transplant diagnoses, evaluations, and interventions to patients. When a patient asks if they are a candidate for a transplant, we make sure to explain their eligibility. In Hyderabad, we are one of the leading facilities for renal disorders, from diagnostic to treatment and aftercare.</div>',
                'our_doctors_text' => 'Find the most experienced and skilled nephrologists in Hyderabad, at STAR Hospitals. Meet our nephrology experts.',
                'reviews_text' => 'You can trust STAR Hospitals with our patient-centric approach for all your healthcare needs. Here is what our patients have to say about us.',
                'media_text' => 'Stay up-to-date about the Cardiology Department at STAR Hospitals with the latest news. Check it out here.',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 3,
                'name' => 'Neuro Sciences',
                'banner_text' => 'Innovative Neurological Excellence with Expert Neurologists in Hyderabad',
                'title' => 'Renowned Neural Center of Specialty in Hyderabad',
                'description' => '<div>STAR Hospitals\' Neuro Centre of Excellence is a specialized facility that focuses on providing comprehensive care to patients with neurological conditions. Our highly skilled team of neurologists, neurosurgeons, and support workers use advanced medical equipment and procedures. We specialize in the diagnosis and treatment of a broad spectrum of neurological diseases. With comprehensive care, we offer complete assistance in the diagnostic, treatment, and surgical procedure with aftercare. We also have advanced imaging technology such as MRI, PET, and CT. We also offer rehabilitation programs to our patients so that they can recover from neurological problems.<br><br>In addition, we are committed to providing our patients with personalized treatment plans tailored to their needs and requirements. Our staff in the renal center works closely with other departments to create customized treatment plans for each patient. We also provide a range of support services to our patients. These include counseling, medication management, and nutrition management. As a leading facility for neurological care, our goal is to improve our patient’s health holistically to achieve an improved quality of life.</div>',
                'our_doctors_text' => 'Find the most experienced and skilled neurologists in Hyderabad, at STAR Hospitals. Meet our neurology experts.',
                'reviews_text' => 'You can trust STAR Hospitals with our patient-centric approach for all your healthcare needs. Here is what our patients have to say about us.',
                'media_text' => 'Stay up-to-date about the Neurological Department at STAR Hospitals with the latest news. Check it out here.',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 4,
                'name' => 'Orthopedic Sciences',
                'banner_text' => 'Advanced Technology with Experts for Orthopedic Care in Hyderabad',
                'title' => 'Leading Orthopedic Center in Hyderabad',
                'description' => '<div>STAR Hospitals\' Orthopedic Center of Excellence is a specialized facility for patients with musculoskeletal conditions. Providing comprehensive care, we house leading surgeons, physical therapists, and support staff who use state-of-the-art medical technology to diagnose and treat orthopedic conditions. We offer a wide range of orthopedic services. These include diagnostics, interventions, and surgery. Equipped with high-end imaging technology like MRI, CT, and X-ray, we also offer rehabilitation services to improve our patients’ musculoskeletal health.<br><br>Our Orthopedic Center of Excellence is dedicated to providing personalized care to our patients. The center\'s staff collaborates with other departments to curate treatment plans for the patient\'s unique needs. In addition, patients can take advantage of a range of support services during and after treatment, including physical therapy, occupational therapy, and pain management. Overall, we help our patients achieve optimal musculoskeletal health despite their condition.</div>',
                'our_doctors_text' => 'Find the most experienced and skilled neurologists in Hyderabad, at STAR Hospitals. Meet our neurology experts.',
                'reviews_text' => 'You can trust STAR Hospitals with our patient-centric approach for all your healthcare needs. Here is what our patients have to say about us.',
                'media_text' => 'Stay up-to-date about the Neurological Department at STAR Hospitals with the latest news. Check it out here.',
                'created_at' => now(),
                'updated_at' => now()
            ],
        );
    }
}
