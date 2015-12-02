<?php if(!defined('KIRBY')) exit ?>

title: Sponsor
pages:
  template: sponsors
files: true
fields:
  goldsponsor:
    label: Premiumsponsor
    type: checkboxes
    options:
      gold: Jawoll, Premiumsponsor
  title:
    label: Title
    type:  text
  text:
    label: Text
    type:  textarea
  link:
    label: Link
    type: text
  Blog:
    label: Weblog
    type:  text
  Facebook:
  	label: Facebook
  	type: text
  Twitter:
    label: Twitter
    type: text
  Google+:
  	label: Google+
    type: text
----

