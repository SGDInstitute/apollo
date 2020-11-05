const { core } = Statamic.$bard.tiptap;
console.log(core);

export default class Lead {
  name() {
    return "lead";
  }

  schema() {
    return {
        parseDOM: [{
            tag: 'p'
        }],
        toDOM: () => [
            "p",
            { style: `color: #404040; font-size: 20px; display: block` },
            0,
        ],
    };
  }

  commands({ type, toggleMark }) {
    return () => toggleMark(type)
  }

  pasteRules({ type }) {
    return [];
  }

  inputRules({ type }) {
    return [markInputRule(/(?:\*\*|__)([^*_]+)(?:\*\*|__)$/, type)];
  }

  plugins() {
    return [];
  }
}
