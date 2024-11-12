---
layout: post
title: Sequencer Megababy key bindings
created: 2024-11-11 11:30:00 -0800
tags:
- REAPER
---

## Notes

| Key | Description |
| --- | --- | --- |
| right-click+drag | Audition existing note or empty location; sets velocity for new notes if existing note is auditioned |
| left-click+drag | Draw or erase notes on the same row |
| `Shift+Ctrl+Alt`+left-click+drag | Freehand draw or erase notes |
| `Ctrl`+left-click+drag | Edit velocity of notes; drag over multiple notes on the same row to create velocity curves |
| `Ctrl+Alt`+left-click+drag | Adjust velocity of all notes on the same row |
| `Shift`+left-click+drag left/right | Adjust note start offset |
| `Shift+Alt`+left-click+drag | Adjust note start offset of all notes on the same row |
| `Alt`+left-click | Tie/untie notes |
| `Alt`+left-drag | Tie/untie multiple notes in a row |
| `Shift`+right-click+drag up/down | Subdivide note |

## Envelopes

| Key | Description |
| --- | --- |
| left-click+drag | Draw/adjust envelope of the active envelope type |
| right-click+drag | Erase envelope of the active envelope type |
| left-click+drag up/down envelope MIDI channel | (Drum map mode) Change MIDI channel of envelope |
| left-click+drag up/down envelope type names/numbers | Change envelope type |

* Envelope types: MIDI CC 0-127; on first envelope (blue) type 127 has a special meaning: it controls probability of note playback on each sequence step; only notes on same channel as the envelope will be affected

## Note names

| Key | Description |
| --- | --- |
| left-click+drag up/down | (Drum map mode) Transpose note row |
| left-click+drag up/down MIDI channel | (Drum map mode) Change MIDI channel of note row |
| `Shift`+left-click | Duplicate sequence; sequence length is doubled |
| `Ctrl`+left-click | Halve steps per beat, slow down |
| `Ctrl`+right-click | Double steps per beat, speed up |
| `Ctrl+Alt`+left-click | Halve steps per beat, preserve note positions; sequence length is halved |
| `Ctrl+Alt`+right-click | Double steps per beat, preserve note positions; sequence length is doubled |

## Keyboard

| Key | Description |
| --- | --- |
| left-click+drag green area | Change base note of the grid |
| right-click+drag green area | Change number of notes in the grid |
| left-click+drag red area | Change MIDI trigger notes for pattern triggering |

## Patterns

| Key | Description |
| --- | --- |
| left-click | Change to pattern |
| `Ctrl`+left-click | Copy the active pattern to clicked pattern and change to the clicked pattern |
| `Ctrl`+right-click | Clear pattern |
| `Alt`+left-click | Set pattern chain end |

## Toolbar

| Key | Description |
| --- | --- |
| left-click **Mode** | Toggle mode (see notes) |
| left-click **Play before start** | Enable/disable playback before start beat position (see notes) |
| left-click **Start beat position** | Set start beat position to current play cursor position |
| right-click **Start beat position** | Set start beat position to default value |
| left-click **End beat position** | Set end beat position to current play cursor position |
| right-click **End beat position** | Set end beat position to default value |
| left-click+drag **Note length** slider | Set/adjust note length for all notes; 100% equals full step length |
| left-click+drag **Swing** slider | Set/adjust swing |

* **Mode** button: `PR` = piano roll, `DM` = drum map
* **Play before start**: `>|>` = play everywhere, `|>` = play only after start beat position
* **End beat position**: `---` = play indefinitely
