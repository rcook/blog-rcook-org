---
layout: post
title: How to program a vibrating click track in Reaper
created: 2022-03-04 10:14:00 -0800
tags:
- EZdrummer
- Music
- Reaper
---
This is a note to myself about how I program a vibrating metronome click track as well as audible metronome in Reaper. This is the equipment I use:

* [Reaper][reaper] with [Sitala][sitala] VSTi
* [Peterson Body Beat Pulse Solo][body-beat-pulse-solo] vibrating metronome
* [Alesis SR18][alesis-sr18] drum machine

## Background

The Body Beat Pulse Solo is a nice piece of kit. It can produce three different intensity of vibrations namely normal (low), subaccent (medium) and accent (high). In order to figure out how to drive it from the drum machine, I reached out Peterson's technical support who were very helpful:

> Hi Richard,
>
> Thank you for your contact.
>
> The three levels of intensity are not so much triggered by the audio input signal type but rather by the panning of the signal.
>
> You can use the same click sample and assign it to three audio tracks. Pan one track hard left, one track hard right, and the third can stay stereo.
>
> Panning assignments:
> Normal (low intensity): Both Channels
> Accent (highest intensity): Right Channel only
> Sub Accent (Medium intensity): Left Channel only
>
> It will likely be best to MIDI program your sample triggers and print to audio. I am not a Reaper expert but hopefully this will give you something to experiment with.

Great! The remainder of this article describes how I create an SR18 drum set to drive the Body Beat Pulso Solo and then create Reaper MIDI tracks to drive the SR18.

## Step (1): Create Alesis SR18 MIDI drum set

This creates a drum set on the SR18 with normal, subaccent and accent pads programmed with panning so that it correctly triggers the Body Beat Pulse Solo:

1. Power up Alesis SR18
2. Press _Drum set_
3. Press _Preset/User_ to ensure that _USER_ shows
4. Turn _Value/Tempo_ until _DRM000_ shows
5. Set up normal, subaccent and accent pads as described in table
6. Set all other parameters as follows:
    * Page 2 (_VOLUME_): _99_
    * Page 3: _Metrnome 000_
    * Page 4 (_PAD VOL_): _99_
    * Page 6 (_TUNING_): _0_
    * Page 7 (_ENV ATTK_): _N/A_
    * Page 8 (_ENV DEC_): _99_
    * Page 9 (_ENV REL_): _N/A_
    * Page 10 (_FILTER_): _99_
    * Page 11 (_ASN MODE_): _MULTI_
    * Page 12 (_OUTPUT_): _MAIN_
    * Page 13: _Metronm_

| Usage     | Pad           | Page 5 (_PANNING_) |
| --------- | ------------- | -------------------|
| Normal    | 4 (_HiHat_)   | centre             |
| Subaccent | 3 (_Snare 2_) | full left          |
| Accent    | 10 (_Crash_)  | full right         |

## Step (2): Program change track

This creates a MIDI track used to send messages to the SR18 to load the MIDI metronome drum set created in Step (1):

1. Right-click and click _Insert new track_ to add a new, empty MIDI track
2. Right-click on new track's _Route_ button and set the MIDI output to the appropriate output with _Send all_
3. Select a two-bar section at the start of the new track and click _Insert > New MIDI item_
4. Double-click on new MIDI item and go to MIDI event list
5. Load <a href="{{ site.url }}/assets/2022-03-04-click-track/Alesis_SR18_pads.txt" download>Alesis_SR18_pads.txt</a> note names
6. Right-click and select _Insert bank/program select event..._
7. Set _MIDI channel_ to _10_
8. Set _Bank MSB_ to _0_
9. Set _Bank LSB_ to _1_
10. Click _OK_
11. Adjust _Position_ of two resulting events to _1.1.00_

Events should look something like the following screenshot:

![Screenshot]({{ site.url }}/assets/2022-03-04-click-track/screenshot.png)

## Step (3) Metronome track

This creates a MIDI track to send note messages to the SR18 to trigger the vibrating metronome:

1. Right-click and click _Insert new track_ to add a new, empty MIDI track
2. Right-click on new track's _Route_ button and set the MIDI output to the appropriate output (same output used in Step (2)) with _Send all as channel 10_
3. Select a two-bar section after the PC MID clip created in Step (2) click _Insert > New MIDI item_
4. Double-click on new MIDI item and go to MIDI piano roll
5. Load <a href="{{ site.url }}/assets/2022-03-04-click-track/Alesis_SR18_pads.txt" download>Alesis_SR18_pads.txt</a> note names
6. Program a sequence of accent, subaccent and normal notes

## Step (4): Count-in track

These steps create an audible count-in using the Sitala drum machine VSTi:

1. Insert new virtual instrument track
2. Add [Sitala][sitala] VSTi via FX
3. Select the _Clean 808_ patch
4. Load <a href="{{ site.url }}/assets/2022-03-04-click-track/Sitala_drums.txt" download>Sitala_drums.txt</a> note names in MIDI piano roll
5. Program a sequence of clicks etc., e.g. rim shot and claves

[alesis-sr18]: https://www.alesis.com/products/view/sr18
[body-beat-pulse-solo]: https://www.petersontuners.com/products/bodybeatpulse/
[reaper]: https://www.reaper.fm/
[sitala]: https://decomposer.de/sitala/
