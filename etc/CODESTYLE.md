# A brief OKAPI coding style guide

- Indent with 4 spaces, no tabs.
- Classes: CamelCase, `{` in new line.
- Methods: lowercase_with_underlines, `{` in new line.
- Small codeblocks within methods: `{` in *the same* line (with a space before
  it). Very large blocks: `{` in a new line.
- When using parenetheses and the content doesn't fit in one line, start
  a new line just after `"("` and indent 4 spaces (e.g.
  http://i.imgur.com/FZmyD7B.png).
- Try to keep <=79 characters in line (not a strict rule, but always <=99).
- Comments:
  - Use `#` or `/* .. */`, avoid `//`. Use `/** .. */` for docstrings.
  - When commenting within a longer block of code, put a blank line before
    and after the comment.
- Strings:
  - use `'...'` for single word contants lower-case contants (i.e. parameter
    names, field names), e.g. `'cache_code'`, `$cache['type']`, etc.
  - use `"..."` for all other strings (especially multiline strings).
- SQL:
  - use multiline strings in SQL queries (the `"..."` strings),
  - use `'...'` for strings within the query (e.g.
    `...where type in ('1', '2')...`),
  - lower-case keywords (`select`, not `SELECT`),
  - avoid the backtick character (\`) - use only when necessary,
  - always indent with 4 spaces (same way as in the rest of code),
  - indent "select", "from", "where", "group by" and "order by" sections,
    but only when they contain more than one entry within.
  - when using "left join" with "on", indent the "on" conditions ("on" falls
    into the indent too).
  - E.g. http://i.imgur.com/VzuwPSX.png