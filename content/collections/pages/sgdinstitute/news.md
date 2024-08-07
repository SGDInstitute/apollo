---
id: 84f83fe2-12b7-4bec-b0f9-f730268f9a2e
blueprint: pages
title: 'News & Blog'
sections:
  -
    id: dCBQ4Lcg
    title: 'News & Blog'
    type: header_small
    enabled: true
  -
    id: 6CyopbwJ
    bg_type: image
    bg_image: headers/blurry-background.jpg
    title: 'News & Blog'
    type: header
    enabled: false
  -
    id: g8y27TbA
    bard:
      -
        type: heading
        attrs:
          textAlign: center
          level: 2
        content:
          -
            type: text
            text: 'Latest news from the Institute'
    type: content
    enabled: true
  -
    id: HIFYnfHp
    articles:
      - 781fdfbf-5354-4c87-9f47-f30935bb9929
      - 9bd65a54-a19f-4faa-91f0-d03c9c84e4d9
      - 62706c6b-c453-4e23-affd-45a5ac045d02
      - cbfe9acc-c0e2-4904-b78c-50645899f618
      - 514e5d47-73cf-49d1-8d9e-6f26898dbb91
    bg_type: color
    bg_color: bg-white
    type: news_feature
    enabled: true
  -
    id: epnnOyYD
    bard:
      -
        type: heading
        attrs:
          textAlign: left
          level: 2
        content:
          -
            type: text
            text: 'All Institute news'
      -
        type: paragraph
        attrs:
          textAlign: left
          class: lead
        content:
          -
            type: text
            text: 'Below, find all news, announcements and updates, podcast episodes, media mentions, and other written updates from the Midwest Institute for Sexuality and Gender Diversity.'
      -
        type: set
        attrs:
          id: DN9FzK3E
          values:
            type: buttons
            buttons:
              -
                id: vdHNNiWD
                link: 'entry::029d818d-ecc3-4356-ace8-0b7d39e7c70a'
                text: 'Podcast episodes'
                color: btn-green
                size: btn-lg
                block: false
                outline: true
                target_blank: false
              -
                id: 69ZhYdSy
                link: 'https://mblgtacc.org/news'
                text: 'MBLGTACC news ↗️'
                color: btn-green
                size: btn-lg
                block: false
                outline: true
                target_blank: false
            contain: true
      -
        type: paragraph
        attrs:
          textAlign: left
          class: null
    type: content
    enabled: true
  -
    id: xPsHTGwJ
    limit: 90
    type: news
    enabled: true
    num_per_row: 3
    pagination: true
    bg_type: color
    bg_color: bg-gray-200
    exclude: true
  -
    id: jetKScTb
    bard:
      -
        type: heading
        attrs:
          textAlign: left
          level: 2
        content:
          -
            type: text
            text: Contact
      -
        type: paragraph
        attrs:
          textAlign: left
          class: lead
        content:
          -
            type: text
            text: 'Questions? '
          -
            type: text
            marks:
              -
                type: link
                attrs:
                  href: 'https://sgdinstitute.org/contact'
                  rel: null
                  target: null
                  title: null
            text: 'Send us a message!'
          -
            type: text
            text: ' A member of our team will return your message as soon as possible :)'
      -
        type: paragraph
        attrs:
          textAlign: left
          class: null
      -
        type: paragraph
        attrs:
          textAlign: left
          class: null
    type: content
    enabled: true
updated_by: cc1d6f85-bab6-480d-8bd1-226c3d628cb2
updated_at: 1721167662
image:
  - headers/homepage-hero1.jpg
description: 'Find all news, announcements and updates, podcast episodes, media mentions, and other written updates from the Midwest Institute for Sexuality and Gender Diversity.'
---
