---
id: 37aa19e4-67e4-4140-91b8-52f06bc5d0e0
blueprint: pages
title: Home
author: 319b9f3d-4a5e-420e-ade8-ceaff8cfc78d
updated_by: cc1d6f85-bab6-480d-8bd1-226c3d628cb2
updated_at: 1647540213
sections:
  -
    header_image: headers/columbus-skyline-sunlight-hero2-1250x400.jpg
    title: 'Limitless: Queer Activism of the Future'
    subtitle: 'The 30th annual Midwest Bisexual Lesbian Gay Transgender Asexual College Conference. Registration and workshop RFPs open on April 4.'
    has_tag: true
    tag: 'October 21-23, 2022  |  Columbus'
    link: 'entry::0542e88f-e68a-4003-a979-5ddd7100257a'
    text: 'Read the announcement'
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
            text: 'Registration opens April 4'
      -
        type: paragraph
        content:
          -
            type: text
            text: 'Tickets for in-person participants are $85. Virtual tickets are $20 per person. Registration will be available until early October. If you don''t register in advance, you can still attend by registering on site for $100.'
      -
        type: set
        attrs:
          enabled: false
          values:
            type: buttons
            buttons:
              -
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
    price: $85
    below_price: 'per person'
    bg_type: color
    num_colors: 2
    bg_color: bg-green-500
    type: two_column
    enabled: true
    center_columns: false
    above_price: 'Registration opens April 4'
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
    enabled: false
  -
    title: 'Skill share presenters'
    event: mblgtacc-2021-skill
    date_format: day_of_week_full
    background_height: full
    block: false
    outline: false
    target_blank: false
    type: speakers
    enabled: false
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
            text: 'MBLGTACC updates and featured news'
    type: content
    enabled: true
  -
    articles:
      - 103a8572-9a57-4afc-becd-d990631846c3
      - d6aaf3d6-fde3-4041-b5f0-67a13005275f
      - 0542e88f-e68a-4003-a979-5ddd7100257a
      - 91ec5273-11bf-4f64-bd07-9cccddca154a
      - 2ab7504d-31cf-48ff-8777-4e784eb12db2
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
    column_widths: quarter_left
    left_column: image
    right_column: content
    center_columns: false
    bard:
      -
        type: heading
        attrs:
          level: 2
        content:
          -
            type: text
            text: 'Join the MBLGTACC Discord'
      -
        type: paragraph
        content:
          -
            type: text
            marks:
              -
                type: lead
            text: 'We have a full virtual community space set up for you.'
      -
        type: paragraph
        content:
          -
            type: text
            text: 'Join other participants on your computer or on the free mobile app to keep connected during and after the conference. Find conversation threads, resources, and Zoom links for every keynote and workshop session. And join identity spaces and hangout channels to chat about pets, plants, outfits of the day, gayming, crafting, and more.'
      -
        type: paragraph
        content:
          -
            type: text
            marks:
              -
                type: link
                attrs:
                  href: 'http://go.wisc.edu/mblgtaccdiscord'
                  rel: null
                  target: _blank
                  title: null
            text: 'Join MBLGTACC on Discord now.'
    image: discord-logo-for-homepage.png
    bg_type: color
    num_colors: 2
    bg_color: bg-green-600
    type: two_column
    enabled: false
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
    limit: 3
    pagination: false
    exclude: false
    bg_type: color
    num_colors: 2
    bg_color: bg-gray-300
    type: news
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
