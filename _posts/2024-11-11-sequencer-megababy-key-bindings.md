---
layout: post
title: Sequencer Megababy key bindings
created: 2024-11-11 11:30:00 -0800
tags:
- REAPER
---

| Key | Description |
| --- | --- |
| right-click/drag | Audition existing note or empty location; sets velocity for new notes if existing note is auditioned |
| --- | --- |
| left-click/drag | Draw or erase notes on the same row |
| `Shift+Ctrl+Alt`+left-click/drag | Freehand draw or erase notes |
| `Ctrl`+left-click/drag | Edit velocity of notes; drag over multiple notes on the same row to create velocity curves |
| `Ctrl+Alt`+left-click/drag | Adjust velocity of all notes on the same row |
| `Shift`+left-click/drag left/right | Adjust note start offset |
| `Shift+Alt`+left-click/drag | Adjust note start offset of all notes on the same row |
| `Alt`+left-click | Tie/untie notes |
| `Alt`+left-drag | Tie/untie multiple notes in a row |
| `Shift`+right-click drag up/down | Subdivide note |
| --- | --- |
| left-click drag up/down note names in Drum map mode | Transpose note row |
| left-click drag up/down MIDI channel number in Drum map mode | Change MIDI channel of note row |
| `Shift`+left-click piano keys/note names | Duplicate sequence; sequence length is doubled |
| `Ctrl`+left-click piano keys/note names | Halve steps per beat, slow down |
| `Ctrl`+right-click piano keys/note names | Double steps per beat, speed up |
| `Ctrl+Alt`+left-click piano keys/note names | Halve steps per beat, preserve note positions; sequence length is halved |
| `Ctrl+Alt`+right-click piano keys/note names | Double steps per beat, preserve note positions; sequence length is doubled |
| --- | --- |
| left-click drag green area on toolbar pianokeys | Change base note of the grid |
| right-click drag green area on toolbar pianokeys | Change number of notes in the grid |
| left-click drag red area on toolbar pianokeys | Change MIDI trigger notes for pattern triggering |
| --- | --- |
| left-click pattern button | Change pattern |
| `Ctrl`+left-click pattern button | Copy the active pattern to clicked pattern and change to the clicked pattern |
| `Ctrl`+right-click pattern button | Clear pattern |
| `Alt`+left-click pattern button | Set pattern chain end |
| --- | --- |
| left-click Mode button (PR=Piano Roll, DM=Drum Map) | Change mode |
| left-click "Play before start" button | Enable/Disable playback before start beat position; "&gt;&#124;&gt;" = play everywhere; " &#124;&gt;" = play only after start beat position |
| left-click "Start beat position" value | Set start beat position to current play cursor position |
| left-click "End beat position" value | Set end beat position to current play cursor position. "---" = play infinitely |
| right-click "Start beat position" value | Set start beat position to default value, "0.000" |
| right-click "End beat position" value | Set end beat position to default value, "---" |
| left-click/drag "Note length" slider | Set/adjust note length for all notes; 100% equals full step length |
| left-click/drag Swing slider | Set/adjust swing |
| --- | --- |
| left-click/drag on envelope lane | Draw/adjust envelope of the active envelope type |
| right-click/drag on envelope lane | Erase envelope of the active envelope type |
| left-click drag up/down envelope MIDI channel (in Drum map mode) | Change MIDI channel of envelope |
| left-click drag up/down envelope type names/numbers | Change envelope type; types: MIDI CC 0-127; On first envelope (the blue one) type 127 has a special meaning; it controls probability of note playback on each sequence step; only notes on same channel as the envelope will be affected |
