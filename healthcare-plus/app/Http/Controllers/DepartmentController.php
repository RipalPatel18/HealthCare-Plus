<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\User;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function show($id)
    {
        $department = Department::findOrFail($id);


        $departmentDoctors = User::where('role', 'doctor')

            ->where('department_id', $department->id)

            ->with('department')
            ->get();

        $details = [
            'description' => 'This department provides specialized medical services and expert consultation.',
            'head' => 'Dr. Sarah Johnson',

            'head_title' => 'Chief Specialist',
            'location' => 'Main Building',
            'phone' => '(555) 000-0000',

            'email' => 'support@healthcareplus.com',
            'hours' => 'Monday - Friday: 9:00 AM - 5:00 PM',

            'specializations' => [
                'Clinical Consultation',

                'Preventive Care',
                'Advanced Diagnostics'
            ],

            'services' => [
                [
                    'name' => 'Initial Consultation',
                    'time' => '30 mins',

                    'desc' => 'Complete patient assessment and diagnosis.'
                ],
                [
                    'name' => 'Follow-up Visit',

                    'time' => '20 mins',
                    'desc' => 'Review treatment progress and adjust care plan.'
                ],
            ]
            
        ];


        return view('department-details', compact('department', 'details', 'departmentDoctors'));
    }
}