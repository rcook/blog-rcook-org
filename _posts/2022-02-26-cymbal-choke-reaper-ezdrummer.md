---
layout: post
title: How to program a cymbal choke in Reaper/EZdrummer 2
created: 2022-02-26 08:08:00 -0800
tags:
- Alesis
- EZdrummer
- Music
- Reaper
---
About ten months into the [Great Catalysm][covid-19] (_that_ catalysm, not [this one][russian-invasion], sigh), I decided that I needed to start doing something with my time while in lockdown. So, off I went onto the Internet to buy myself an electronic drum kit&mdash;an [Alesis Nitro Mesh kit][nitro-mesh]&mdash;which has been a huge amount of fun. I've logged more than 400 unbroken days on [Melodics][melodics] learning to play and now I'm a reasonably competent bedroom drummer.

Unfortunately, I have neglected all of my recording projects due to creative block or fatigue or mental exhaustion or something. Anyway, I'm planning to get back into it. A little task I've set myself is to (re)learn is how to get drums into [Reaper][reaper] and, thence, into [EZdrummer 2][ezdrummer]. I've been playing around with incorporating [cymbal chokes][cymbal-choke] into Reaper since the Alesis drum module doesn't send the same kind of MIDI data that EZdrummer expects. So, in this post I'm going to document how I do this for posterity by reverse-engineering some stuff I programmed into Reaper previously.

The easiest way I've found is to add MIDI poly aftertouch events. Here's the MIDI event editor in Reaper:

![Reaper piano roll]({{ site.url }}/assets/2022-02-26-cymbal-choke-reaper-ezdrummer/midi-events.png)

Here are the events of interest:

* Index 713: Kick hit that was played concurrently with the cymbal hit: because doing that is totally badass
* Index 714: Cymbal hit
* Index 715: _Poly Aftertouch_ with full velocity played shortly after cymbal hit
* Index 716: _Poly Aftertouch_ with zero velocity played immediately after the full velocity

The time between Index 714 and Index 715 determines how long the cymbal rings before it is choked.

Hope that helps!

[covid-19]: https://en.wikipedia.org/wiki/COVID-19
[cymbal-choke]: https://en.wikipedia.org/wiki/Cymbal_choke
[ezdrummer]: https://www.toontrack.com/product/ezdrummer-2/
[general-midi]: https://en.wikipedia.org/wiki/General_MIDI
[melodics]: https://melodics.com/
[nitro-mesh]: https://www.alesis.com/products/view2/nitro-mesh-kit
[reaper]: https://www.reaper.fm/
[russian-invasion]: https://en.wikipedia.org/wiki/2022_Russian_invasion_of_Ukraine
