# Zenith Sec Sandbox Vault Walkthrough

I use this file as a small checklist before changing the PHP implementation.

| Case | Focus | Score | Lane |
| --- | --- | ---: | --- |
| baseline | trust boundary | 145 | ship |
| stress | claim drift | 147 | ship |
| edge | replay exposure | 146 | ship |
| recovery | policy width | 160 | ship |
| stale | trust boundary | 149 | ship |

Start with `recovery` and `baseline`. They create the widest contrast in this repository's fixture set, which makes them better review anchors than the middle cases.

The useful comparison is `policy width` against `trust boundary`, not the raw score alone.
