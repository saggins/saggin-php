---
layout: page
title: Season1
permalink: /season1/
---
{%- if site.posts.size > 0 -%}
  <h2 class="post-list-heading">Season One Links</h2>
  <ul class="post-list">
    {%- for post in site.categories.seasonone -%}
      <li>
        {%- assign date_format = site.minima.date_format | default: "%b %-d, %Y" -%}
        <span class="post-meta">{{ post.date | date: date_format }}</span>
        <h3>
          <a class="post-link" href="{{ post.url | relative_url }}">
            {{ post.title | escape }}
          </a>
        </h3>
        {%- if site.show_excerpts -%}
          {{ post.excerpt }}
        {%- endif -%}
      </li>
    {%- endfor -%}
  </ul>
  <p class="rss-subscribe">subscribe <a href="{{ "/feed.xml" | relative_url }}">via RSS</a></p>
{%- endif -%}