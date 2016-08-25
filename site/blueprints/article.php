<?php if(!defined('KIRBY')) exit ?>

title: Page
pages: false
files: true
fields:
  title:
    label: Title
    type:  text
  cover:
    label: Cover
    type: text
  text:
    label: Text
    type:  textarea
  get-personal:
    label: getpersonal
    type: textarea
  Links:
      label: Links
      type: structure
      entry: >
        {{link_name}} - {{link_pic}} - {{link_url}} - {{link_text}}
      fields:
        link_name:
          label: Name
          type: text
        link_pic:
          label: Logo
          type: text
        link_url:
          label: Link
          type: text
        link_text:
           label: Text
           type: textarea
