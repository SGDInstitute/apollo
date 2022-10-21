---
id: 37aa19e4-67e4-4140-91b8-52f06bc5d0e0
blueprint: pages
title: Home
author: 319b9f3d-4a5e-420e-ade8-ceaff8cfc78d
updated_by: cc1d6f85-bab6-480d-8bd1-226c3d628cb2
updated_at: 1666357531
sections:
  -
    header_image: headers/columbus-skyline-sunlight-hero2-1250x400.jpg
    title: 'Limitless: Queer Activism of the Future'
    subtitle: 'The 30th annual Midwest Bisexual Lesbian Gay Transgender Asexual College Conference'
    has_tag: true
    tag: 'October 21-23, 2022  |  Columbus'
    link: 'entry::2fc54ba6-acf8-4871-b3c1-8e34f56cf7eb'
    text: Register
    color: btn-green
    size: btn-xl
    block: true
    outline: true
    target_blank: true
    type: header_large
    enabled: true
    has_button: false
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
            text: 'Register on-site'
      -
        type: paragraph
        content:
          -
            type: text
            text: 'You can still join us! Register on-site at the Greater Columbus Convention Center for $100.'
      -
        type: set
        attrs:
          values:
            type: buttons
            buttons:
              -
                link: 'entry::2fc54ba6-acf8-4871-b3c1-8e34f56cf7eb'
                text: 'Registration and ticket options'
                color: btn-white
                size: btn-lg
                block: false
                outline: true
                target_blank: false
            contain: true
      -
        type: paragraph
    price: $100
    below_price: 'per person (in-person experience)'
    bg_type: color
    num_colors: 2
    bg_color: bg-green-600
    type: two_column
    enabled: true
    center_columns: false
    above_price: 'On-site registration'
  -
    title: 'Keynotes and entertainment'
    event: mblgtacc-2022-keynote
    date_format: day_of_week_full
    background_height: full
    color: btn-green
    size: btn-lg
    block: false
    outline: false
    target_blank: false
    type: speakers
    enabled: false
  -
    bard:
      -
        type: paragraph
        content:
          -
            type: text
            text: ' '
      -
        type: set
        attrs:
          values:
            type: video
            video: 'https://youtu.be/co_WZK-scn8'
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
            text: 'MBLGTACC updates and featured news'
    type: content
    enabled: true
  -
    articles:
      - 17d73968-1f5f-42b6-9625-65d7d89ea12d
      - 409b4fbb-dd8d-4845-bafc-642ca8d967bf
      - 18a84c2f-93b4-4567-97b1-59c89737e23a
      - 1df01ff1-bc73-4dcf-8de0-3c4308ab8eec
      - d3710e56-ef2a-408f-83a7-0e63f71e57fb
    bg_type: gradient
    num_colors: 2
    from_color: from-black
    to_color: to-white
    type: news_feature
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
            text: 'Schedule information & digital program'
      -
        type: set
        attrs:
          values:
            type: buttons
            buttons:
              -
                link: 'entry::87680b15-89d3-4128-b22c-532f8f4ea4b0'
                text: 'Schedule overview'
                color: btn-green
                size: btn-xl
                block: false
                outline: true
                target_blank: true
              -
                link: 'https://drive.google.com/file/d/1OtnAa57rq1RYAqXHaisQ7yNwxB223qmx/view?usp=sharing'
                text: 'View program PDF'
                color: btn-green
                size: btn-xl
                block: false
                outline: true
                target_blank: true
            contain: true
      -
        type: paragraph
    type: content
    enabled: false
  -
    column_widths: third_right
    left_column: content
    right_column: image
    center_columns: false
    bard:
      -
        type: heading
        attrs:
          level: 2
        content:
          -
            type: text
            marks:
              -
                type: bold
            text: 'Organizing a delegation or small group'
      -
        type: paragraph
        content:
          -
            type: text
            marks:
              -
                type: lead
            text: 'We want to make organizing a group as easy as possible so that you can make the most out of your—and your group''s—MBLGTACC experience. Our student group toolkit and checklist bring you all the key logistical information you need to get from your community to Columbus this October.'
      -
        type: set
        attrs:
          values:
            type: buttons
            buttons:
              -
                link: 'entry::12d04696-6c0f-4433-aa6c-499fe7572ed9'
                text: 'View toolkit & checklist'
                color: btn-white
                size: btn-lg
                block: false
                outline: true
                target_blank: false
            contain: true
    image: news/mblgtacc-2017-sunday-audience1-teaser-1090x681.jpg
    bg_type: color
    num_colors: 2
    bg_color: bg-green-600
    type: two_column
    enabled: true
  -
    bard:
      -
        type: paragraph
      -
        type: heading
        attrs:
          level: 2
        content:
          -
            type: text
            text: 'Get engaged'
      -
        type: paragraph
        content:
          -
            type: text
            marks:
              -
                type: lead
            text: 'From attending to presenting to sponsoring and more, be part of what makes MBLGTACC special. '
      -
        type: set
        attrs:
          values:
            type: buttons
            buttons:
              -
                link: 'entry::2fc54ba6-acf8-4871-b3c1-8e34f56cf7eb'
                text: 'How to Register'
                color: btn-green
                size: btn-lg
                block: false
                outline: true
                target_blank: false
              -
                link: 'entry::6b6906fa-60ad-436d-ae31-1972a8651df0'
                text: 'Sponsor & Exhibit'
                color: btn-green
                size: btn-lg
                block: false
                outline: true
                target_blank: false
            contain: true
    type: content
    enabled: true
  -
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
      -
        type: paragraph
    type: content
    enabled: false
  -
    date: '2022-10-21 19:00'
    hashtag: 'until #mblgtacc30'
    bg_type: color
    num_colors: 2
    bg_color: bg-gray-200
    type: countdown
    enabled: true
template: default
description: 'The 30th annual Midwest Bisexual Lesbian Gay Transgender Asexual College Conference'
image:
  - headers/mblgtacc30-reveal-01.jpg
---
Hello world
