<?php

class ChiefController extends BaseController {

    public function postValidate() {


        var_dump($_POST);
    }

    public function postMemo() {
        $u = User::find(Auth::user()->id);
        $u->memo = Input::get("memo");
        $u->save();
        System_logsController::createLog(Auth::user()->id, 0, $u->id, "Updated memo", "users");
        return Redirect::back();
    }

    public function getIndex() {
        return View::make("content.test");
//        return Redirect::to("agent/dashboard");
    }

    public function getDashboard($num = NULL) {
        $data = [
            "num" => $num,
        ];
        return View::make("base.agent.dashboard", $data);
    }

    public function getCasesAdd($id = null) {
        $data = [
            "complaint" => Complaint::find($id),
            "complaint_victims" => Complaint_victim::where("complaint_id", "=", $id)->get(),
            "complaint_subjects" => Complaint_subject::where("complaint_id", "=", $id)->get(),
        ];
        return View::make("base.cases.add", $data);
    }

    public function getCasesOngoing($id = null) {
        $data = [
            "case" => Kase::find($id),
            "case_evidences" => Case_evidence::where("case_id", "=", $id)->get(),
            "case_subjects" => Case_subject::where("case_id", "=", $id)->get(),
            "case_type_tags" => Case_type_tag::where("case_id", "=", $id)->get(),
            "case_victims" => Case_victim::where("case_id", "=", $id)->get(),
            "evidence_recordings" => DB::table('case_evidences')->where("case_evidences.case_id", "=", $id)->where("case_evidences.type", "=", "Recording")->join('evidence_recordings', 'case_evidences.evidence_id', '=', 'evidence_recordings.id')->get(),
            "evidence_pictures" => DB::table('case_evidences')->where("case_evidences.case_id", "=", $id)->where("case_evidences.type", "=", "Picture")->join('evidence_pictures', 'case_evidences.evidence_id', '=', 'evidence_pictures.id')->get(),
            "evidence_videos" => DB::table('case_evidences')->where("case_evidences.case_id", "=", $id)->where("case_evidences.type", "=", "Video")->join('evidence_videos', 'case_evidences.evidence_id', '=', 'evidence_videos.id')->get(),
            "evidence_documents" => DB::table('case_evidences')->where("case_evidences.case_id", "=", $id)->where("case_evidences.type", "=", "Document")->join('evidence_documents', 'case_evidences.evidence_id', '=', 'evidence_documents.id')->get(),
            "evidence_objects" => DB::table('case_evidences')->where("case_evidences.case_id", "=", $id)->where("case_evidences.type", "=", "Object")->join('evidence_objects', 'case_evidences.evidence_id', '=', 'evidence_objects.id')->get(),
        ];
        return View::make("base.cases.ongoing", $data);
    }

    public function getCasesNonViable($id = null) {
        $data = [
            "case" => Kase::find($id),
            "case_evidences" => Case_evidence::where("case_id", "=", $id)->get(),
            "case_subjects" => Case_subject::where("case_id", "=", $id)->get(),
            "case_type_tags" => Case_type_tag::where("case_id", "=", $id)->get(),
            "case_victims" => Case_victim::where("case_id", "=", $id)->get(),
            "evidence_recordings" => DB::table('case_evidences')->where("case_evidences.case_id", "=", $id)->where("case_evidences.type", "=", "Recording")->join('evidence_recordings', 'case_evidences.evidence_id', '=', 'evidence_recordings.id')->get(),
            "evidence_pictures" => DB::table('case_evidences')->where("case_evidences.case_id", "=", $id)->where("case_evidences.type", "=", "Picture")->join('evidence_pictures', 'case_evidences.evidence_id', '=', 'evidence_pictures.id')->get(),
            "evidence_videos" => DB::table('case_evidences')->where("case_evidences.case_id", "=", $id)->where("case_evidences.type", "=", "Video")->join('evidence_videos', 'case_evidences.evidence_id', '=', 'evidence_videos.id')->get(),
            "evidence_documents" => DB::table('case_evidences')->where("case_evidences.case_id", "=", $id)->where("case_evidences.type", "=", "Document")->join('evidence_documents', 'case_evidences.evidence_id', '=', 'evidence_documents.id')->get(),
            "evidence_objects" => DB::table('case_evidences')->where("case_evidences.case_id", "=", $id)->where("case_evidences.type", "=", "Object")->join('evidence_objects', 'case_evidences.evidence_id', '=', 'evidence_objects.id')->get(),
        ];
        return View::make("base.cases.nonviable", $data);
    }

    public function getCasesAssign($id = null) {
        $data = [
            "case" => Kase::find($id),
            "case_evidences" => Case_evidence::where("case_id", "=", $id)->get(),
            "case_subjects" => Case_subject::where("case_id", "=", $id)->get(),
            "case_type_tags" => Case_type_tag::where("case_id", "=", $id)->get(),
            "case_victims" => Case_victim::where("case_id", "=", $id)->get(),
            "evidence_recordings" => DB::table('case_evidences')->where("case_evidences.case_id", "=", $id)->where("case_evidences.type", "=", "Recording")->join('evidence_recordings', 'case_evidences.evidence_id', '=', 'evidence_recordings.id')->get(),
            "evidence_pictures" => DB::table('case_evidences')->where("case_evidences.case_id", "=", $id)->where("case_evidences.type", "=", "Picture")->join('evidence_pictures', 'case_evidences.evidence_id', '=', 'evidence_pictures.id')->get(),
            "evidence_videos" => DB::table('case_evidences')->where("case_evidences.case_id", "=", $id)->where("case_evidences.type", "=", "Video")->join('evidence_videos', 'case_evidences.evidence_id', '=', 'evidence_videos.id')->get(),
            "evidence_documents" => DB::table('case_evidences')->where("case_evidences.case_id", "=", $id)->where("case_evidences.type", "=", "Document")->join('evidence_documents', 'case_evidences.evidence_id', '=', 'evidence_documents.id')->get(),
            "evidence_objects" => DB::table('case_evidences')->where("case_evidences.case_id", "=", $id)->where("case_evidences.type", "=", "Object")->join('evidence_objects', 'case_evidences.evidence_id', '=', 'evidence_objects.id')->get(),
        ];
        return View::make("base.cases.assign", $data);
    }

    public function getCasesPending($id = null) {
        $data = [
            "case" => Kase::find($id),
            "case_evidences" => Case_evidence::where("case_id", "=", $id)->get(),
            "case_subjects" => Case_subject::where("case_id", "=", $id)->get(),
            "case_type_tags" => Case_type_tag::where("case_id", "=", $id)->get(),
            "case_victims" => Case_victim::where("case_id", "=", $id)->get(),
            "evidence_recordings" => DB::table('case_evidences')->where("case_evidences.case_id", "=", $id)->where("case_evidences.type", "=", "Recording")->join('evidence_recordings', 'case_evidences.evidence_id', '=', 'evidence_recordings.id')->get(),
            "evidence_pictures" => DB::table('case_evidences')->where("case_evidences.case_id", "=", $id)->where("case_evidences.type", "=", "Picture")->join('evidence_pictures', 'case_evidences.evidence_id', '=', 'evidence_pictures.id')->get(),
            "evidence_videos" => DB::table('case_evidences')->where("case_evidences.case_id", "=", $id)->where("case_evidences.type", "=", "Video")->join('evidence_videos', 'case_evidences.evidence_id', '=', 'evidence_videos.id')->get(),
            "evidence_documents" => DB::table('case_evidences')->where("case_evidences.case_id", "=", $id)->where("case_evidences.type", "=", "Document")->join('evidence_documents', 'case_evidences.evidence_id', '=', 'evidence_documents.id')->get(),
            "evidence_objects" => DB::table('case_evidences')->where("case_evidences.case_id", "=", $id)->where("case_evidences.type", "=", "Object")->join('evidence_objects', 'case_evidences.evidence_id', '=', 'evidence_objects.id')->get(),
        ];
        return View::make("base.cases.pending", $data);
    }

    public function getCasesClosed($id = null) {
        $data = [
            "case" => Kase::find($id),
            "case_evidences" => Case_evidence::where("case_id", "=", $id)->get(),
            "case_subjects" => Case_subject::where("case_id", "=", $id)->get(),
            "case_type_tags" => Case_type_tag::where("case_id", "=", $id)->get(),
            "case_victims" => Case_victim::where("case_id", "=", $id)->get(),
            "evidence_recordings" => DB::table('case_evidences')->where("case_evidences.case_id", "=", $id)->where("case_evidences.type", "=", "Recording")->join('evidence_recordings', 'case_evidences.evidence_id', '=', 'evidence_recordings.id')->get(),
            "evidence_pictures" => DB::table('case_evidences')->where("case_evidences.case_id", "=", $id)->where("case_evidences.type", "=", "Picture")->join('evidence_pictures', 'case_evidences.evidence_id', '=', 'evidence_pictures.id')->get(),
            "evidence_videos" => DB::table('case_evidences')->where("case_evidences.case_id", "=", $id)->where("case_evidences.type", "=", "Video")->join('evidence_videos', 'case_evidences.evidence_id', '=', 'evidence_videos.id')->get(),
            "evidence_documents" => DB::table('case_evidences')->where("case_evidences.case_id", "=", $id)->where("case_evidences.type", "=", "Document")->join('evidence_documents', 'case_evidences.evidence_id', '=', 'evidence_documents.id')->get(),
            "evidence_objects" => DB::table('case_evidences')->where("case_evidences.case_id", "=", $id)->where("case_evidences.type", "=", "Object")->join('evidence_objects', 'case_evidences.evidence_id', '=', 'evidence_objects.id')->get(),
        ];
        return View::make("base.cases.closed", $data);
    }
    
    public function getCasesList() {
        
        
        $data = [
            "cases" => Kase::where("division", "=", Auth::user()->division)->get()
        ];
        
        return View::make("base.cases.list", $data);
    }

    public function getCalendar() {
        $data = [
//            "num" => $num,
        ];
        return View::make("base.calendar", $data);
    }

 
    public function getResourcesRequest() {
        $data = [
//            "num" => $num,
        ];
        return View::make("base.resources.request", $data);
    }

    public function getResourcesApproval() {
        $data = [
//            "num" => $num,
        ];
        return View::make("base.resources.approval", $data);
    }

    public function getResourcesCurrent() {
        $data = [
//            "num" => $num,
        ];
        return View::make("base.resources.current", $data);
    }

    public function getMessages($id = null) {
        $data = [
//            "messages" => DB::table('messages')
//                ->leftJoin('message_recipients','messages.id', '=', 'message_recipients.message_id')
//                ->where("message_recipients.user_id", "=", Auth::user()->id)
//                ->get(),
            "messages" => Message_recipient::where("user_id", "=", Auth::user()->id)->get(),
            "message" => Message::find($id),
            "message_logs" => Message_log::where("message_id", "=", $id)->get(),
            "message_recipients" => Message_recipient::where("message_id", "=", $id)->get(),
        ];
        return View::make("base.messages", $data);
    }

    public function getReportsAgents() {
        $data = [
            "agents" => User::where("division", "=", Auth::user()->division)->where("job_title", "!=", "Secretary")->get()
        ];
        return View::make("base.reports.chief_agents", $data);
    }

    public function getReportsComplaints() {
        $data = [
            "agents" => User::where("division", "=", Auth::user()->division)->get()
        ];
        return View::make("base.reports.chief_complaints", $data);
    }

    public function getReportsTrends() {
        $data = [
            "agents" => User::where("division", "=", Auth::user()->division)->get()
        ];
        return View::make("base.reports.chief_trends", $data);
    }
    
    public function getReportsTrendsStatus() {
        $data = [
            "agents" => User::where("division", "=", Auth::user()->division)->get()
        ];
        return View::make("base.reports.chief_trends_status", $data);
    }

    public function getReportsLocations() {
        $data = [
            "agents" => User::where("division", "=", Auth::user()->division)->get()
        ];
        return View::make("base.reports.chief_locations", $data);
    }

    public function getReportsDemographics() {
        $data = [
            "agents" => User::where("division", "=", Auth::user()->division)->get()
        ];
        return View::make("base.reports.chief_demographics", $data);
    }

    public function getReportsDemographicsSubjects() {
        $data = [
            "agents" => User::where("division", "=", Auth::user()->division)->get()
        ];
        return View::make("base.reports.chief_demographics_subjects", $data);
    }
    
    public function getReportsCaseTimelineComparison() {
        $data = [
            "agents" => User::where("division", "=", Auth::user()->division)->get()
        ];
        return View::make("base.reports.case_timeline_comparison", $data);
    }
    
    public function getFormList(){
        $data = [
        ];
        return View::make("base.forms", $data);
        
        
    }
    public function getFormSubpoena(){
        $data = [
            "agents" => User::where("division", "=", Auth::user()->division)->get()
        ];
        return View::make("base.forms.subpoena", $data);
        
        
    }
    public function getFormDisposition(){
        $data = [
            "agents" => User::where("division", "=", Auth::user()->division)->get()
        ];
        return View::make("base.forms.disposition", $data);
        
        
    }
    public function getFormCoordination(){
        $data = [
            "agents" => User::where("division", "=", Auth::user()->division)->get()
        ];
        return View::make("base.forms.coordination", $data);
        
        
    }
    public function getFormTransmital(){
        $data = [
            "agents" => User::where("division", "=", Auth::user()->division)->get()
        ];
        return View::make("base.forms.transmital", $data);
        
        
    }
    public function getAgents(){
        $data = [
        ];
        return View::make("base.agents", $data);
        
        
    }
    public function getClients(){
        $data = [
        ];
        return View::make("base.clients", $data);
        
        
    }
    public function getResourcesList(){
        $data = [
        ];
        return View::make("base.resources", $data);
        
        
    }
    public function getNotifications(){
        $data = [
        ];
        return View::make("base.notifications", $data);
        
        
    }
    

}
