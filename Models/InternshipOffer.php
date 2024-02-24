<?php
	class InternshipOffer extends Model{
		protected $fillable = ['position', 'presentation', 'places_available', 'level_required', 'deadline', 'application_file', 'company_id', 'created_at'];
		
	}
?>