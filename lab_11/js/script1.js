function square() {
	let len, wid, sq, per;
	len = parseInt(main_form.t_len.value);
	wid = parseInt(main_form.t_wid.value);
	 
	sq = len*wid;
	per = (len+wid)*2;
	main_form.t_sq.value = "" + sq;
	main_form.t_per.value = "" + per;
}