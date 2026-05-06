# zenith-sec-sandbox-vault

`zenith-sec-sandbox-vault` is a compact PHP repository for security tooling, centered on this goal: Implement a PHP security tooling project for sandbox event replay, using fixture event logs and golden state snapshots.

## Use Case

The project exists to keep a narrow engineering decision visible and testable. For this repo, that decision is how trust boundary and replay exposure should influence a review result.

## Zenith Sec Sandbox Vault Review Notes

The first comparison I would make is `policy width` against `trust boundary` because it shows where the rule is most opinionated.

## Highlights

- `fixtures/domain_review.csv` adds cases for trust boundary and claim drift.
- `metadata/domain-review.json` records the same cases in structured form.
- `config/review-profile.json` captures the read order and the two review questions.
- `examples/zenith-sec-sandbox-walkthrough.md` walks through the case spread.
- The PHP code includes a review path for `policy width` and `trust boundary`.
- `docs/field-notes.md` explains the strongest and weakest cases.

## Code Layout

The core code exposes a scoring path and the added review layer uses `signal`, `slack`, `drag`, and `confidence`. The domain terms are `trust boundary`, `claim drift`, `replay exposure`, and `policy width`.

The PHP addition stays small enough to inspect in one sitting.

## Run The Check

```powershell
powershell -NoProfile -ExecutionPolicy Bypass -File scripts/verify.ps1
```

## Regression Path

The same command runs the local verification path. The highest-scoring domain case is `recovery` at 160, which lands in `ship`. The most cautious case is `baseline` at 145, which lands in `ship`.

## Future Work

No external service is required. A deeper version would add more negative cases and a clearer boundary around invalid input.
