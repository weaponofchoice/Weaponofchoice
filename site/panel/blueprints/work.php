<?php if(!defined('KIRBY')) exit ?>


# work.php blueprint

title: Work
pages:
  template: work
files: true
fields:
	header: 
	  label: header
	  type:  fileselect
	  filetype:
	    - image
	  empty: select a photo
	  required: true
	  help: Selecteer hier een foto voor in de header-homepage
	background: 
	 label: Background
	 type:  text
	 help: Voer hier de hexadecimaal voor de achtergrond kleur
	hero: 
	 label: hero
	 type:  fileselect
	 filetype:
	   - image
	 empty: select a photo
	 required: true
	 help: Selecteer hier een foto voor in de hero
	title: 
	 label: Title
	 type:  text
	quote: 
	 label: Quote
	 type:  textarea
	 size:  medium
	copy01: 
	 label: copy01
	 type:  textarea
	 size:  medium
	midden:
	 label: midden
	 type: textarea
	 buttons: true
	 size: large
	onder:
	 label: onder
	 type: fileselect
	meta:
	 label: meta
	 type: textarea
	 size: medium
	 buttons:
	  - bold
	  
 


