---
id: c36f7410-114f-46ae-bdde-8ac59f66d1da
blueprint: pages
title: News
sections:
  -
    title: News
    type: header_small
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
      - ca546ec3-e1bb-40db-822a-7e01b783a310
      - 34580b4c-d99d-440b-a0de-2ee25124f2ef
      - be612a3e-8439-443f-b257-b95bccde7c62
      - 1c227b11-474f-41a8-aa27-82522fdb59e4
      - 103a8572-9a57-4afc-becd-d990631846c3
    bg_type: color
    num_colors: 2
    bg_color: bg-transparent
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
            text: 'All MBLGTACC news'
      -
        type: paragraph
        content:
          -
            type: text
            marks:
              -
                type: lead
            text: 'Below, find all news, announcements and updates, blog posts, media mentions, and other written updates from the Midwest Bisexual Lesbian Gay Transgender Asexual College Conference.'
      -
        type: set
        attrs:
          values:
            type: buttons
            buttons:
              -
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
    type: content
    enabled: true
  -
    limit: 100
    num_per_row: 3
    pagination: true
    exclude: false
    bg_type: color
    num_colors: 2
    bg_color: bg-gray-100
    type: news
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
            text: 'Contact us'
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
                  href: 'https://mblgtacc.org/contact'
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
            text: ' Someone on our team will return your message as soon as possible :)'
      -
        type: paragraph
      -
        type: paragraph
    type: content
    enabled: true
updated_by: cc1d6f85-bab6-480d-8bd1-226c3d628cb2
updated_at: 1652206005
---
