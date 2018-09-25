const Preparation = function()
{
  this.init = function()
  {
    this.university   = document.getElementById('_university').value;
    this.selectCycle  = document.getElementById('beginning-cyle');
    this.selectVenue  = document.getElementById('beginning-venue');
    this.selectTurn   = document.getElementById('beginning-turn');
    this.paintable    = document.getElementById('drawTables');
    this.work         = false;

    this.hear();
  }

  this.hear = function()
  {
    this.hearSelectCycle();
    this.hearSelectVenue();
    this.hearSelectTurn();
  }

  this.hearSelectCycle = function()
  {
    this.selectCycle.addEventListener('change', function(){
      this.response('cycle');
    }.bind(this));
  }

  this.hearSelectVenue = function()
  {
    this.selectVenue.addEventListener('change', function(){
      this.response('venue');
    }.bind(this));
  }

  this.hearSelectTurn = function()
  {
    this.selectTurn.addEventListener('change', function(){
      this.response('turn');
    }.bind(this));
  }

  this.response = function(type)
  {
    this.selectCycle.disabled = true;
    this.selectVenue.disabled = true;
    this.selectTurn.disabled  = true;

    var valueCycle  = this.selectCycle.options[this.selectCycle.selectedIndex].value;
    var valueVenue  = this.selectVenue.options[this.selectVenue.selectedIndex].value;
    var valueTurn   = this.selectTurn.options[this.selectTurn.selectedIndex].value;

    if(this.work === false){
      this.drawLoading();
      this.work = true;

      post('/api/academia/beginnings', `university=${this.university}&combo=${type}&venue=${valueVenue}&cycle=${valueCycle}&turn=${valueTurn}`).then(
          response  => this.responseAction(response),
          error     => console.log('error')
        );
    }

  }

  this.responseAction = function(data)
  {
    setTimeout(function(){
      this.work                 = false;
      this.selectCycle.disabled = false;
      this.selectVenue.disabled = false;
      this.selectTurn.disabled  = false;

      data = JSON.parse(data);

      if(Object.keys(data).length){
        this.draw(data);
      }else{
          this.paintable.innerHTML = `<p class="beginning-no-results">No se encontraron resultados<p>`;
      }

    }.bind(this), 1000);
  }

  this.drawLoading = function()
  {
    this.paintable.innerHTML = `
    <div id="loader-minus">
      <div id="loader-minus-block" style="opacity:1 !important;">
      </div>
      <div class="loader-minus-trilce">
        <svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 91.9 100.3'>
          <polygon points='0 0 0 22.6 14.6 22.6 14.6 16.7 36.9 16.7 36.9 85.7 30.2 85.7 30.2 100.3 61.8 100.3 61.8 85.7 55.1 85.7 55.1 16.7 77.4 16.7 77.4 22.6 91.9 22.6 91.9 0 0 0' fill='#f4633a'/></svg>
        </div>
    </div>
    `;
  }

  this.draw = function(data)
  {
    var tables='', thead='', tbody='';
    data.forEach((tableData, i) => {

      tableData.head.forEach(value => {
        thead += `<th>${value}</th>`;
      });

      let tableName = Object.keys(tableData);

      tableData[tableName[0]].forEach(td => {
        tbody += `<tr>`;

        td.forEach( (value,i) => {
          tbody += `<td data-label="${tableData.head[i]}"> ${value}</td>`;
        });

        tbody += `</tr>`;
      });

      tables += `<table class="preparation-table">
                  <thead>
                    <tr>
                      ${thead}
                    </tr>
                  </thead>
                  <tbody>
                    ${tbody}
                  </tbody>
                </table>`;
      thead = '', tbody='';
    });

    this.paintable.innerHTML = tables;
  }
}

export default Preparation;
