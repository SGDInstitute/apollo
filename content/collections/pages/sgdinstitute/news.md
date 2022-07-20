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
      - b88e51fd-0065-4baa-8aed-fb507f5a13dd
      - fc30779b-3ed3-473e-89b5-6a5ab0a34236
      - a922534b-054c-455c-8719-4c205fa86dfd
      - 2d0a14c5-1280-4ec6-b0c0-8a78d5cf3747
      - 6005121e-6a02-41bc-ad39-323a077df692
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
updated_at: 1658350911
image:
  - headers/homepage-hero1.jpg
---
