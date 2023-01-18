---
id: 84f83fe2-12b7-4bec-b0f9-f730268f9a2e
blueprint: pages
title: 'News & Blog'
sections:
  -
    title: 'News & Blog'
    type: header_small
    enabled: true
  -
    bg_type: image
    bg_image: headers/blurry-background.jpg
    num_colors: 2
    title: 'News & Blog'
    type: header
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
            text: 'Latest news from the Institute'
    type: content
    enabled: true
  -
    articles:
      - 481cc737-dc5d-4b89-b65f-6d85b302eb8a
      - 1c3d6975-2553-4efc-9058-4d8306027012
      - a32b7b3f-fd1a-493b-bbea-e29549881d4b
      - a8bac138-2c2c-46c3-8bcb-263bd2b9dbfc
      - b62f94e7-2958-41db-aae6-8c3fb4052afd
    bg_type: color
    num_colors: 2
    bg_color: bg-white
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
            text: 'All Institute news'
      -
        type: paragraph
        content:
          -
            type: text
            marks:
              -
                type: lead
            text: 'Below, find all news, announcements and updates, podcast episodes, media mentions, and other written updates from the Midwest Institute for Sexuality and Gender Diversity.'
      -
        type: set
        attrs:
          values:
            type: buttons
            buttons:
              -
                link: 'entry::029d818d-ecc3-4356-ace8-0b7d39e7c70a'
                text: 'Podcast episodes'
                color: btn-green
                size: btn-lg
                block: false
                outline: true
                target_blank: false
              -
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
    type: content
    enabled: true
  -
    limit: 90
    type: news
    enabled: true
    num_per_row: 3
    pagination: true
    bg_type: color
    num_colors: 2
    bg_color: bg-gray-200
    exclude: true
  -
    bard:
      -
        type: heading
        attrs:
          level: 2
        content:
          -
            type: text
            text: Contact
      -
        type: paragraph
        content:
          -
            type: text
            marks:
              -
                type: lead
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
              -
                type: lead
            text: 'Send us a message!'
          -
            type: text
            marks:
              -
                type: lead
            text: ' A member of our team will return your message as soon as possible :)'
      -
        type: paragraph
      -
        type: paragraph
    type: content
    enabled: true
updated_by: cc1d6f85-bab6-480d-8bd1-226c3d628cb2
updated_at: 1674080056
image:
  - headers/homepage-hero1.jpg
---
