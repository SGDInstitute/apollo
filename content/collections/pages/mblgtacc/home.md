---
id: 37aa19e4-67e4-4140-91b8-52f06bc5d0e0
blueprint: pages
title: Home
author: 319b9f3d-4a5e-420e-ade8-ceaff8cfc78d
updated_by: cc1d6f85-bab6-480d-8bd1-226c3d628cb2
updated_at: 1633701339
sections:
  -
    header_image: headers/madison-katie-wheeler-cc-by-nc-web.jpg
    title: 'From Protest and Beyond Pride'
    subtitle: 'Hosted by the UW-Madison and Edgewood College communities at the Monona Terrace in Madison, Wisconsin'
    has_tag: true
    tag: '29th Annual MBLGTACC  |  October 8-10, 2021'
    link: 'https://apps.sgdinstitute.org/events/mblgtacc-2021'
    text: 'Register now'
    color: btn-green
    size: btn-xl
    block: true
    outline: true
    target_blank: true
    type: header_large
    enabled: true
    has_button: true
  -
    date: '2021-10-08 19:00'
    hashtag: 'until #mblgtacc2021'
    bg_type: color
    num_colors: 2
    bg_color: bg-yellow-300
    type: countdown
    enabled: true
  -
    id: pricing
    column_widths: two_fifths_left
    left_column: pricing
    right_column: content
    bard:
      -
        type: heading
        attrs:
          level: 2
        content:
          -
            type: text
            text: 'Registration is open'
      -
        type: paragraph
        content:
          -
            type: text
            text: 'Virtual tickets start at $25 per person. Tickets for in-person participants are $85. Registration will be available until 11:59 p.m. CT on October 1. If you don''t register in advance, you can still attend by registering on site for $100.'
      -
        type: set
        attrs:
          values:
            type: buttons
            buttons:
              -
                button: null
                link: 'entry::2fc54ba6-acf8-4871-b3c1-8e34f56cf7eb'
                text: 'Registration and ticket options'
                color: btn-white
                size: btn-lg
                block: false
                outline: false
                target_blank: false
            contain: true
      -
        type: paragraph
    price: $25
    below_price: 'per person'
    bg_type: color
    num_colors: 2
    bg_color: bg-green-500
    type: two_column
    enabled: false
    center_columns: false
    above_price: 'Starting at'
  -
    title: 'Keynotes and featured session'
    event: mblgtacc-2021-keynote
    date_format: day_of_week_full
    background_height: full
    color: btn-green
    size: btn-lg
    block: false
    outline: false
    target_blank: false
    type: speakers
    enabled: true
  -
    title: 'Skill share presenters'
    event: mblgtacc-2021-skill
    date_format: day_of_week_full
    background_height: full
    block: false
    outline: false
    target_blank: false
    type: speakers
    enabled: true
  -
    bard:
      -
        type: heading
        attrs:
          level: 2
        content:
          -
            type: text
            text: 'Discord, schedule information, digital program, and more! '
      -
        type: set
        attrs:
          values:
            type: buttons
            buttons:
              -
                button: null
                link: 'http://go.wisc.edu/mblgtaccdiscord'
                text: 'Join MBLGTACC on Discord'
                color: btn-green
                size: btn-xl
                block: true
                outline: true
                target_blank: true
              -
                button: null
                link: 'entry::87680b15-89d3-4128-b22c-532f8f4ea4b0'
                text: 'Conference schedule'
                color: btn-green
                size: btn-xl
                block: true
                outline: true
                target_blank: true
              -
                button: null
                link: 'https://drive.google.com/file/d/1OtnAa57rq1RYAqXHaisQ7yNwxB223qmx/view?usp=sharing'
                text: 'View program PDF'
                color: btn-green
                size: btn-xl
                block: true
                outline: true
                target_blank: true
            contain: true
      -
        type: paragraph
    type: content
    enabled: true
  -
    bard:
      -
        type: heading
        attrs:
          level: 2
        content:
          -
            type: text
            text: Sponsors
      -
        type: paragraph
        content:
          -
            type: text
            text: 'The MBLGTACC 2021 host committee and the Midwest Institute for Sexuality and Gender Diversity are grateful for the organizations and people that have supported the conference through direct and in-kind donations. The conference would not have been possible without the levels of support they’ve given the conference over the past two years.'
      -
        type: set
        attrs:
          values:
            type: image
            image: sponsors/2021-sponsor-logo-wall.png
            inline: false
      -
        type: paragraph
        content:
          -
            type: text
            marks:
              -
                type: italic
            text: 'MBLGTACC 2021 is also funded in part by a grant from the New Harvest Foundation, Inc.'
    type: content
    enabled: true
  -
    limit: 3
    pagination: false
    exclude: false
    bg_type: color
    num_colors: 2
    bg_color: bg-gray-300
    type: news
    enabled: true
template: default
description: 'Hosted by the University of Wisconsin-Madison and Edgewood College communities at the Monona Terrace in Madison, Wisconsin'
image:
  - headers/madison-katie-wheeler-cc-by-nc-web.jpg
---
Hello world
