<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Service;

class ServiceController extends Controller
{
    public function index()
    {
        $departments = Department::orderBy('name')->get();
        $services = Service::with('department')->orderBy('name')->get();


        return view('services', compact('departments', 'services'));
    }

    public function show($id)
    {
        $service = Service::with('department')->findOrFail($id);

        $serviceData = [
            'General Consultation' => [
                'description' => 'Comprehensive medical examination and consultation with our experienced physicians. Suitable for routine checkups, new symptoms, or follow-up visits.',
                'bring' => [
                    'Valid photo ID',
                    'Insurance card (if applicable)',
                    
                    'List of current medications',
                    'Previous medical records (if first visit)',
                ],
                'expect' => [
                    'Medical history review',
                    'Physical examination',

                    'Discussion of symptoms or concerns',
                    'Diagnosis and treatment plan',
                    'Prescription if needed',

                ],
                'price' => '$75 - $150 (depending on complexity)',
            ],

            'Heart Checkup' => [
                'description' => 'A complete cardiovascular assessment designed to monitor heart health, identify risks, and support early prevention.',
                'bring' => [

                    'Valid photo ID',
                    'List of current medications',
                    'Previous cardiac reports if available',
                    'Insurance card (if applicable)',
                ],
                'expect' => [
                    'Vital signs check',
                    'Heart health assessment',
                    'ECG or basic screening review',
                    'Doctor consultation',
                    'Recommendations for follow-up care',

                ],
                'price' => '$120 - $200 (depending on tests)',
            ],

            'Skin Treatment' => [
                'description' => 'Professional dermatology consultation and treatment for common skin concerns including acne, irritation, rashes, and dryness.',
                'bring' => [
                    'Valid photo ID',

                    'List of skincare products currently used',
                    'Previous prescriptions if any',
                    'Insurance card (if applicable)',
                ],
                'expect' => [
                    'Skin evaluation',
                    'Discussion of symptoms',
                    'Treatment recommendations',

                    'Prescription if required',
                    'Follow-up care advice',
                ],
                'price' => '$80 - $160 depending on treatment.',
            ],

            'Bone Fracture Care' => [
                'description' => 'Orthopedic assessment and care for fractures, bone injuries, and follow-up recovery support.',
                'bring' => [

                    'Valid photo ID',
                    'Any previous X-ray reports',

                    'Referral note if available',
                    'Insurance card (if applicable)',
                ],
                'expect' => [
                    'Physical injury assessment',
                    'Review of imaging or X-rays',

                    'Stabilization or treatment planning',
                    'Pain management discussion',

                    'Recovery and follow-up instructions',
                ],
                'price' => '$150 - $300 depending on injury severity.',
            ],

            'Child Vaccination' => [
                'description' => 'Safe and routine vaccination service for infants and children with guidance from our pediatric care team.',
                'bring' => [
                    'Child health card',

                    'Parent/guardian ID',
                    'Previous vaccination record',
                    'Insurance card if applicable',

                ],
                'expect' => [
                    'Vaccination history review',

                    'Basic child wellness check',
                    'Vaccine administration',

                    'Post-vaccine care instructions',
                    'Schedule for next doses if needed',
                ],
                'price' => '$50 - $120 depending on vaccine type.',
            ],
        ];

        $details = $serviceData[$service->name] ?? [
            'description' => 'Detailed service information is available upon request.',
            'bring' => [
                'Valid photo ID',
                'Insurance card if applicable',
            ],
            'expect' => [
                'Consultation with healthcare staff',
                'Assessment and care guidance',

            ],
            'price' => 'Please contact us for pricing information.',
        ];

        return view('service-details', compact('service', 'details'));
    }

    public function showDepartment($id)
    {
        $department = Department::findOrFail($id);

        $departmentData = [
            'Cardiology' => [
                'description' => 'Our Cardiology Department provides comprehensive heart and cardiovascular care. We specialize in the diagnosis, treatment, and prevention of heart diseases and cardiovascular conditions.',
                'head' => 'Dr. Daniel Kim',
                'head_title' => 'MD, FACC, Chief of Cardiology',

                'location' => 'Building A, 3rd Floor',
                'phone' => '(555) 123-4567',
                'email' => 'cardiology@healthcareplus.com',

                'doctors_count' => '5 Specialists',
                'hours' => 'Monday - Friday: 8:00 AM - 6:00 PM, Saturday: 9:00 AM - 2:00 PM',
                'specializations' => [
                    'Interventional Cardiology',
                    'Electrophysiology',

                    'Heart Failure Management',
                    'Preventive Cardiology',
                    'Cardiac Imaging',
                ],
                'services' => [
                    ['name' => 'Cardiac Screening', 'time' => '45 mins', 'desc' => 'Comprehensive heart health assessment'],
                    ['name' => 'ECG Testing', 'time' => '30 mins', 'desc' => 'Electrocardiogram to check heart rhythm'],
                    ['name' => 'Stress Testing', 'time' => '50 mins', 'desc' => 'Exercise-based heart function evaluation'],
                    ['name' => 'Echocardiography', 'time' => '45 mins', 'desc' => 'Ultrasound imaging of the heart'],
                ],
                'doctors' => [
                 
                ['name' => 'Dr. Daniel Kim', 'specialty' => 'Interventional Cardiology', 'image' => 'daniel.jpg'],
                    ['name' => 'Dr. Michael Thompson', 'specialty' => 'Electrophysiology', 'image' => 'michael.jpg'],
                    ['name' => 'Dr. Emily Carter', 'specialty' => 'Heart Failure', 'image' => 'emily.jpg'],
                    ['name' => 'Dr. Olivia Bennett', 'specialty' => 'Preventive Cardiology', 'image' => 'olivia.jpg'],
                ],
            ],

            'Dermatology' => [
                'description' => 'Our Dermatology Department provides advanced care for skin, hair, and nail conditions. We focus on diagnosis, treatment, and preventive skin health.',
                'head' => 'Dr. Emily Carter',
                'head_title' => 'MD, Chief of Dermatology',
                'location' => 'Building B, 2nd Floor',
                'phone' => '(555) 234-5678',

                'email' => 'dermatology@healthcareplus.com',
                'doctors_count' => '4 Specialists',
                'hours' => 'Monday - Friday: 9:00 AM - 5:00 PM',
                'specializations' => [
                    'Clinical Dermatology',
                    'Cosmetic Dermatology',
                    'Skin Allergy Care',
                    'Acne Treatment',
                    'Eczema Management',
                ],
                'services' => [
                    ['name' => 'Skin Consultation', 'time' => '30 mins', 'desc' => 'General skin care assessment'],
                    ['name' => 'Acne Treatment', 'time' => '40 mins', 'desc' => 'Personalized acne treatment plan'],
                   
                    ['name' => 'Allergy Testing', 'time' => '35 mins', 'desc' => 'Skin allergy diagnosis and care'],
                    ['name' => 'Mole Evaluation', 'time' => '25 mins', 'desc' => 'Check suspicious skin spots'],
                ],
                'doctors' => [
                    ['name' => 'Dr. Emily Carter', 'specialty' => 'Clinical Dermatology', 'image' => 'emily.jpg'],
                    ['name' => 'Dr. Olivia Bennett', 'specialty' => 'Cosmetic Dermatology', 'image' => 'olivia.jpg'],
                ],
            ],

            'General Medicine' => [
                'description' => 'Our General Medicine Department provides primary healthcare services including consultations, health screenings, and ongoing treatment support.',
                'head' => 'Dr. Olivia Bennett',
                'head_title' => 'MD, Chief of General Medicine',
                'location' => 'Building C, 1st Floor',
                'phone' => '(555) 345-6789',
                'email' => 'generalmedicine@healthcareplus.com',
                'doctors_count' => '5 Specialists',

                'hours' => 'Monday - Saturday: 8:00 AM - 6:00 PM',
                'specializations' => [
                    'Primary Care',
                    'Preventive Medicine',
                    'Chronic Disease Care',
                    'Health Screening',
                    'General Consultation',
                ],
                'services' => [
                    ['name' => 'General Consultation', 'time' => '30 mins', 'desc' => 'Routine check-up and medical advice'],
                    ['name' => 'Health Screening', 'time' => '40 mins', 'desc' => 'Basic preventive health check'],
                   
                    ['name' => 'Vaccination', 'time' => '20 mins', 'desc' => 'Routine immunization service'],
                    ['name' => 'Follow-up Visit', 'time' => '25 mins', 'desc' => 'Ongoing treatment monitoring'],
                ],
                'doctors' => [
                    ['name' => 'Dr. Olivia Bennett', 'specialty' => 'Primary Care', 'image' => 'olivia.jpg'],
                    ['name' => 'Dr. Daniel Kim', 'specialty' => 'Preventive Medicine', 'image' => 'daniel.jpg'],
                ],
            ],

            'Orthopedics' => [
                'description' => 'Our Orthopedics Department provides expert care for bones, joints, muscles, and sports injuries with advanced treatment and rehabilitation support.',
                'head' => 'Dr. Michael Thompson',
                'head_title' => 'MD, Chief of Orthopedics',
                'location' => 'Building D, 2nd Floor',
                'phone' => '(555) 456-7890',

                'email' => 'orthopedics@healthcareplus.com',
                'doctors_count' => '4 Specialists',
                'hours' => 'Monday - Friday: 8:30 AM - 5:30 PM',
                'specializations' => [
                    'Joint Care',
                    'Fracture Treatment',

                    'Sports Injury',
                    'Spine Care',
                    'Rehabilitation',
                ],
                'services' => [
                    ['name' => 'Bone Fracture Care', 'time' => '45 mins', 'desc' => 'Diagnosis and treatment for fractures'],
                    ['name' => 'Joint Consultation', 'time' => '35 mins', 'desc' => 'Assessment of joint pain and mobility'],
                    ['name' => 'Physical Therapy', 'time' => '50 mins', 'desc' => 'Rehabilitation and recovery support'],
                    
                    ['name' => 'Sports Injury Review', 'time' => '40 mins', 'desc' => 'Treatment for sports-related injuries'],
                ],
                'doctors' => [
                    ['name' => 'Dr. Michael Thompson', 'specialty' => 'Joint Care', 'image' => 'michael.jpg'],
                   
                    ['name' => 'Dr. Sophia Martinez', 'specialty' => 'Sports Injury', 'image' => 'sophia.jpg'],
                ],

            ],

            'Pediatrics' => [
                'description' => 'Our Pediatrics Department provides specialized healthcare services for infants, children, and adolescents in a safe and caring environment.',
                'head' => 'Dr. Sophia Martinez',
                'head_title' => 'MD, Chief of Pediatrics',
                'location' => 'Building E, 1st Floor',
                'phone' => '(555) 567-8901',

                'email' => 'pediatrics@healthcareplus.com',
                'doctors_count' => '3 Specialists',
                'hours' => 'Monday - Friday: 9:00 AM - 5:00 PM',
                'specializations' => [
                    'Child Wellness',
                    'Vaccination',

                    'Pediatric Checkups',
                    'Development Assessment',
                    'Preventive Child Care',
                ],
                'services' => [
                    ['name' => 'Child Vaccination', 'time' => '20 mins', 'desc' => 'Routine vaccination for children'],
                    ['name' => 'Pediatric Checkup', 'time' => '30 mins', 'desc' => 'General health assessment for children'],
                   
                    ['name' => 'Growth Monitoring', 'time' => '25 mins', 'desc' => 'Monitor child development and growth'],
                    ['name' => 'Flu Consultation', 'time' => '20 mins', 'desc' => 'Diagnosis and care for seasonal flu'],
                ],
                'doctors' => [
                   
                ['name' => 'Dr. Sophia Martinez', 'specialty' => 'Child Wellness', 'image' => 'sophia.jpg'],
                    ['name' => 'Dr. Emily Carter', 'specialty' => 'Pediatric Checkups', 'image' => 'emily.jpg'],
                ],
            ],

        ];


        $details = $departmentData[$department->name] ?? null;


        return view('department-details', compact('department', 'details'));
    }
}