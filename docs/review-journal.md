# Review Journal

The cases below are the review handles I would use before changing the implementation.

The local checks classify each case as `ship`, `watch`, or `hold`. That gives the project a small review vocabulary that matches its security tooling focus without claiming live deployment or external usage.

## Cases

- `baseline`: `trust boundary`, score 145, lane `ship`
- `stress`: `claim drift`, score 147, lane `ship`
- `edge`: `replay exposure`, score 146, lane `ship`
- `recovery`: `policy width`, score 160, lane `ship`
- `stale`: `trust boundary`, score 149, lane `ship`

## Note

A future change should add new cases before it changes the scoring rule.
