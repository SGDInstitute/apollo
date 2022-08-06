---
id: 5cda0e3f-6fcd-4f76-b87a-946b8578895f
blueprint: pages
title: About
template: default
updated_by: cc1d6f85-bab6-480d-8bd1-226c3d628cb2
updated_at: 1659816143
sections:
  -
    title: 'About the Institute'
    type: header_small
    enabled: true
  -
    bg_type: image
    bg_image: headers/blurry-background.jpg
    num_colors: 2
    title: 'About the Institute'
    type: header
    enabled: false
  -
    bard:
      -
        type: paragraph
        content:
          -
            type: text
            marks:
              -
                type: lead
            text: 'At the Midwest Institute for Sexuality and Gender Diversity, we re-envision a culture of higher education where the needs and experiences of systematically disadvantaged students are centered and the diverse experiences across the spectrums of sexuality and gender are celebrated.'
      -
        type: heading
        attrs:
          level: 2
        content:
          -
            type: text
            text: 'Our programs'
      -
        type: paragraph
        content:
          -
            type: text
            text: 'The Institute works with talented and committed student leaders from across the region to host the Midwest Bisexual Lesbian Gay Transgender Asexual College Conference ('
          -
            type: text
            marks:
              -
                type: link
                attrs:
                  href: 'https://mblgtacc.org'
                  rel: null
                  target: _blank
                  title: null
            text: MBLGTACC
          -
            type: text
            text: '), the largest conference hosted by and for LGBTQIA+ college students. Through this and '
          -
            type: text
            marks:
              -
                type: link
                attrs:
                  href: /programs
                  rel: null
                  target: null
                  title: null
            text: 'other programs'
          -
            type: text
            text: ', we advance knowledge of sexuality and gender and we empower students to inspire sustainable change. We lead our higher education colleagues in relevant and inclusive practices.'
      -
        type: paragraph
      -
        type: set
        attrs:
          values:
            type: buttons
            buttons:
              -
                link: 'entry::12bd6a1f-1e76-4eec-ab59-16ede7709c1c'
                text: 'Discover our programs'
                color: btn-green
                size: btn-lg
                block: false
                outline: false
                target_blank: false
            contain: true
      -
        type: paragraph
      -
        type: heading
        attrs:
          level: 2
        content:
          -
            type: text
            text: 'Learn more'
      -
        type: paragraph
        content:
          -
            type: text
            text: 'While you’re here, learn more about '
          -
            type: text
            marks:
              -
                type: link
                attrs:
                  href: /about/philosophy
                  rel: null
                  target: null
                  title: null
            text: 'our philosophy'
          -
            type: text
            text: ". Discover how you can\_"
          -
            type: text
            marks:
              -
                type: link
                attrs:
                  href: /giving
                  rel: null
                  target: _blank
                  title: null
            text: "support\_"
          -
            type: text
            text: "our mission. Or,\_"
          -
            type: text
            marks:
              -
                type: link
                attrs:
                  href: /contact
                  rel: null
                  target: null
                  title: null
            text: 'let us know'
          -
            type: text
            text: "\_how we can better support you."
      -
        type: paragraph
      -
        type: set
        attrs:
          values:
            type: buttons
            buttons:
              -
                link: 'entry::8d78c3fb-8bd7-4467-9212-40fb54fcf5ef'
                text: 'Contact us'
                color: btn-white
                size: btn-lg
                block: false
                outline: false
                target_blank: false
            contain: true
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
    bg_color: bg-green-600
    type: news
    enabled: true
image:
  - headers/homepage-hero1.jpg
---
