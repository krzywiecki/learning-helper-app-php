<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\IssueModel;
use App\Models\IssueTranslationModel;
use Illuminate\Support\Facades\Validator;

class IssueController extends Controller
{

    public function create(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'issue' => 'required|max:255',
            'lang' => 'required|min:2|max:2',
            'translation_lang' => 'required|min:2|max:2',
            'translation' => 'required|max:255',
        ]);

        if ($validation->fails()) {
            return response()->json($validation->errors(), 400);
        }

        $issue = IssueModel::firstOrCreate([
            'issue' => $request->issue,
            'lang' => $request->lang
        ]);
        $translation = IssueTranslationModel::firstOrCreate([
            'issue_id' => $issue->id,
            'lang' => $request->translation_lang,
            'translation' => $request->translation
        ]);

        return response()->json(['id' => $issue->id]);
    }

    public function show(int $id)
    {
        return response()->json(IssueModel::find($id));
    }
}
