<?php

namespace App\Http\Controllers;

use App\Models\Career;
use App\Models\Client;
use App\Models\Image;
use App\Models\News;
use App\Models\Notice;
use App\Models\Project;
use App\Models\Slider;
use App\Models\Video;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    function client(){
        try {
            $tasks = Client::where('status',1)->get();
            return response()->json([
                'status' => 'success',
                'message' => 'All Clients retrieved successfully',
                'responseCode' => 200,
                'data' => $tasks,
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Failed to retrieve Clients',
                'responseCode' => 500,
                'errors' => [$e->getMessage()],
            ], 500);
        }
    }

    function galleryImage(){
        try {
            $tasks = Image::where('status',1)->get();
            return response()->json([
                'status' => 'success',
                'message' => 'All Gallery Images retrieved successfully',
                'responseCode' => 200,
                'data' => $tasks,
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Failed to retrieve Gallery Images.',
                'responseCode' => 500,
                'errors' => [$e->getMessage()],
            ], 500);
        }
    }

    function galleryVideo(){
        try {
            $tasks = Video::where('status',1)->get();
            return response()->json([
                'status' => 'success',
                'message' => 'All Videos retrieved successfully',
                'responseCode' => 200,
                'data' => $tasks,
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Failed to retrieve Videos',
                'responseCode' => 500,
                'errors' => [$e->getMessage()],
            ], 500);
        }
    }

    function career(){
        try {
            $tasks = Career::where('status',1)->get();
            return response()->json([
                'status' => 'success',
                'message' => 'All Careers retrieved successfully',
                'responseCode' => 200,
                'data' => $tasks,
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Failed to retrieve Careers',
                'responseCode' => 500,
                'errors' => [$e->getMessage()],
            ], 500);
        }
    }

    function noc(){
        try {
            $tasks = Notice::where('status',1)->get();
            return response()->json([
                'status' => 'success',
                'message' => 'All Notices retrieved successfully',
                'responseCode' => 200,
                'data' => $tasks,
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Failed to retrieve Notices',
                'responseCode' => 500,
                'errors' => [$e->getMessage()],
            ], 500);
        }
    }

    function news(){
        try {
            $tasks = News::where('status',1)->get();
            return response()->json([
                'status' => 'success',
                'message' => 'All News retrieved successfully',
                'responseCode' => 200,
                'data' => $tasks,
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Failed to retrieve News.',
                'responseCode' => 500,
                'errors' => [$e->getMessage()],
            ], 500);
        }
    }

    function project(){
        try {
            $tasks = Project::where('status',1)->get();
            return response()->json([
                'status' => 'success',
                'message' => 'All Projects retrieved successfully',
                'responseCode' => 200,
                'data' => $tasks,
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Failed to retrieve Projects',
                'responseCode' => 500,
                'errors' => [$e->getMessage()],
            ], 500);
        }
    }

    function slider(){
        try {
            $tasks = Slider::where('status',1)->get();
            return response()->json([
                'status' => 'success',
                'message' => 'All Sliders retrieved successfully',
                'responseCode' => 200,
                'data' => $tasks,
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Failed to retrieve Sliders',
                'responseCode' => 500,
                'errors' => [$e->getMessage()],
            ], 500);
        }
    }

}