HTMLElement.prototype.toggle = function () {
    if (this.style.display == 'flex') {
        this.style.display = 'none';
    } else {
        this.style.display = 'flex';
    }
};