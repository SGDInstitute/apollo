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
      - 39e32201-2422-4c9f-91ac-f37cc7baea1f
      - f28fe500-0247-4c86-8837-a4a47c88331d
      - 2a0bfc3e-2c65-4e29-9474-4c5dc42a7b91
      - c7cbd3c6-8d49-4daa-8c29-c273691cae5b
      - a8bac138-2c2c-46c3-8bcb-263bd2b9dbfc
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
updated_by: 19a591a2-66c3-420a-9e1e-d76651f2bf19
updated_at: 1671566111
image:
  - headers/homepage-hero1.jpg
---
