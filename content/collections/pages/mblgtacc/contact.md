---
id: e67ad125-380a-4992-9e32-9af4bb9e3853
blueprint: pages
title: Contact
sections:
  -
    title: Contact
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
            text: 'Conference updates'
      -
        type: paragraph
        attrs:
          textAlign: left
          class: lead
        content:
          -
            type: text
            text: 'Find all the latest updates on our '
          -
            type: text
            marks:
              -
                type: link
                attrs:
                  href: /news
                  rel: null
                  target: null
                  title: null
              -
                type: italic
            text: News
          -
            type: text
            text: ' page.  '
      -
        type: paragraph
        content:
          -
            type: text
            text: 'We''ll continue to announce important dates and highlight key information—for attendees, advisors, presenters, and sponsors—as the conference nears. Get these updates as soon as they''re publicly available by '
          -
            type: text
            marks:
              -
                type: link
                attrs:
                  href: 'statamic://entry::dca874eb-b7c9-4175-828d-75840c0f89f1'
                  rel: null
                  target: null
                  title: null
            text: 'signing up to receive our emails'
          -
            type: text
            text: ', using the "Stay Connected" form near the bottom of this page.'
      -
        type: paragraph
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
        attrs:
          textAlign: left
          class: lead
        content:
          -
            type: text
            text: 'Have a question for us? Send us a message through the form below.'
      -
        type: paragraph
      -
        type: set
        attrs:
          values:
            type: form
            formset: contact
      -
        type: paragraph
    type: content
    enabled: true
  -
    limit: 3
    pagination: false
    exclude: false
    bg_type: color
    num_colors: 2
    bg_color: bg-gray-100
    type: news
    enabled: true
template: default
updated_by: cc1d6f85-bab6-480d-8bd1-226c3d628cb2
updated_at: 1649029162
---
