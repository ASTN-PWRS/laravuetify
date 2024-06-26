import KatexAutoRender from "katex/dist/contrib/auto-render";
import "katex/dist/katex.min.css";

const katex = {
  mounted: (el, binding) => {
    let options = {
      delimiters: [
        { left: "$$", right: "$$", display: true },
        { left: "$", right: "$", display: false },
        { left: "\\(", right: "\\)", display: false },
        { left: "\\[", right: "\\]", display: true },
      ],
    };
    if (binding.value) {
      options = binding.value;
    }
    el.style.position = "relative";
    KatexAutoRender(el, options);
  },
};

export default katex;
