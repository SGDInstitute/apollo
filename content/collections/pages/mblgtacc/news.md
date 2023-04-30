---
id: c36f7410-114f-46ae-bdde-8ac59f66d1da
blueprint: pages
title: News
sections:
  -
    id: uv0q9A8y
    title: News
    type: header_small
    enabled: true
  -
    id: vkuuzKbz
    bard:
      -
        type: paragraph
        attrs:
          textAlign: left
          class: lead
        content:
          -
            type: text
            text: 'Sign-up for email updates to be among the first to learn about key announcements, deadlines, and information.'
      -
        type: set
        attrs:
          id: dR0APuVw
          values:
            type: buttons
            buttons:
              -
                id: uiB9PpgR
                link: 'entry::dca874eb-b7c9-4175-828d-75840c0f89f1'
                text: 'Get email updates'
                color: btn-green
                size: btn-lg
                block: false
                outline: true
                target_blank: false
            contain: true
      -
        type: heading
        attrs:
          level: 2
    type: content
    enabled: true
  -
    id: 22sgbJiR
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
    id: 15js90eX
    articles:
      - 32c5499f-c2b5-4768-80ff-1e675c3357f6
      - f80230fc-9263-498e-87bc-7f58a6589179
      - e2c52738-efd4-489f-933b-a544e5e1c137
      - 3e5f036b-a493-4823-8f42-f763d32b7f0b
      - 79b20e53-7e95-476e-adcd-6748ba545021
    bg_type: color
    bg_color: bg-transparent
    type: news_feature
    enabled: true
  -
    id: xKEaM2pG
    bard:
      -
        type: heading
        attrs:
          level: 2
        content:
          -
            type: text
            text: 'MBLGTACC 2023 news'
      -
        type: set
        attrs:
          id: 7dlvszd7
          enabled: false
          values:
            type: buttons
            buttons:
              -
                id: gfyEPalG
                link: 'entry::dca874eb-b7c9-4175-828d-75840c0f89f1'
                text: 'Get email updates'
                color: btn-green
                size: btn-lg
                block: false
                outline: true
                target_blank: true
            contain: true
      -
        type: paragraph
        content:
          -
            type: text
            marks:
              -
                type: bold
            text: Title
          -
            type: hardBreak
          -
            type: text
            text: Date
    type: content
    enabled: false
  -
    id: J3PHJmcn
    bard:
      -
        type: heading
        attrs:
          level: 2
        content:
          -
            type: text
            text: 'All MBLGTACC news (complete listing)'
      -
        type: paragraph
        attrs:
          textAlign: left
          class: lead
        content:
          -
            type: text
            text: 'Below, find all news, announcements and updates, blog posts, media mentions, and other written updates about the Midwest Bisexual Lesbian Gay Transgender Asexual College Conference.'
    type: content
    enabled: true
  -
    id: KA0cXU6D
    limit: 100
    num_per_row: 3
    pagination: true
    exclude: false
    bg_type: color
    bg_color: bg-gray-100
    type: news
    enabled: true
  -
    id: iy1DSI9Q
    bard:
      -
        type: heading
        attrs:
          textAlign: left
          level: 2
        content:
          -
            type: text
            text: 'Contact us'
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
                  href: 'https://mblgtacc.org/contact'
                  rel: null
                  target: null
                  title: null
            text: 'Send us a message!'
          -
            type: text
            text: ' Someone on our team will return your message as soon as possible :)'
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
updated_at: 1682873778
---
