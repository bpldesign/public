
class ImageCompare extends HTMLElement {
	defaultExposure = 50;
	exposure = this.getAttribute("exposure") || this.defaultExposure;
	inputSelector = "input[type=range]";

	/**
	 * Generates an HTML string for a `<label>` containing a visually hidden
	 * description for screen readers and an `<input type="range">` slider
	 * for setting the exposure value.
	 */
	ui(exposure) {
		return `
		<label>
			<span class="visually-hidden">
				Control how much of each overlapping image is shown.
				0 means the first image is completely hidden.
				100 means the first image is fully visible.
				50 means both images are half-shown, half-hidden.
			</span>
			<input type="range" value="${exposure}" min="0" max="100" />
		</label>`;
        
	}

	constructor() {
		super();
	}

	connectedCallback() {
		this.#setPropPercentage("--exposure", this.defaultExposure);

		// Defer DOM manipulation to ensure children are present
		requestAnimationFrame(() => {
			const secondImg = this.querySelectorAll("img")[1];
			
				this.#wrapSecondImg(secondImg, "span", "image-2-wrapper");
		

			this.#appendHtml(this.ui(this.exposure));
			this.#setupInputListener(this.inputSelector);
		});
	}

	static get observedAttributes() {
		return ["exposure"];
	}

	attributeChangedCallback(name, oldValue, newValue) {
		if (name === "exposure") {
			const rangeInput = this.querySelector(this.inputSelector);
			if (rangeInput) {
				rangeInput.value = newValue;
				this.#setPropPercentage("--exposure", newValue);
			}
		}
	}

	#setupInputListener(el) {
		const rangeInput = this.querySelector(el);
		const handleInputChange = () => {
			this.setAttribute("exposure", rangeInput.value);
		};
		rangeInput.addEventListener("input", handleInputChange);
		rangeInput.addEventListener("change", handleInputChange);
	}

	#appendHtml(rawHtml) {
		const tempDiv = document.createElement("div");
		tempDiv.innerHTML = rawHtml;
		while (tempDiv.firstChild) {
			this.appendChild(tempDiv.firstChild);
		}
	}

	#wrapSecondImg(img, tag, className) {
		this.wrap(img, tag, className);
	}

	#setPropPercentage(prop, value) {
		this.style.setProperty(prop, value + "%");
	}

	wrap(el, tag, className) {
		const wrapper = Object.assign(document.createElement(tag), {
			className: className
		});
		if (el && el.parentNode) {
			el.parentNode.insertBefore(wrapper, el);
			wrapper.appendChild(el);
		}
        console.log(this);
	}
}

customElements.define("image-compare", ImageCompare);
