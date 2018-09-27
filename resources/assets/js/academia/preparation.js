import Loading from '../require/helpers/loading_trilce';

const Preparation = function()
{
  this.init = function()
  {
    this.setVariables();
    this.hear();
  }

  this.setVariables = function()
  {
    this.university   = document.getElementById('_university').value;
    this.selectCycle  = document.getElementById('beginning-cyle');
    this.selectVenue  = document.getElementById('beginning-venue');
    this.selectTurn   = document.getElementById('beginning-turn');
    this.paintable    = document.getElementById('drawTables');
    this.work         = false;
    this.api          = '/api/academia/beginnings';
    this.loading      = Loading;
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

    var valueCycle  = this.selectCycle.options[this.selectCycle.selectedIndex].value,
        valueVenue  = this.selectVenue.options[this.selectVenue.selectedIndex].value,
        valueTurn   = this.selectTurn.options[this.selectTurn.selectedIndex].value;

    if(this.work === false){
      this.drawLoading();
      this.work = true;

      var getResults = async () => {
        const setting = {
          method: 'POST',
          headers: {
            Accept: 'application/json',
            'Content-Type': 'application/json',
          },
          body: JSON.stringify({
            'university': this.university,
            'combo':      type,
            'venue':      valueVenue,
            'cycle':      valueCycle,
            'turn':       valueTurn
          })
        };

        const data = await fetch(this.api, setting)
        .then(response => response.json())
        .then(json => {
            this.responseAction(json);
        })
        .catch(e => {
          return e
        });

        return data;
      }

      getResults();
    }

  }

  this.responseAction = function(data)
  {
    setTimeout(function(){
      this.work                 = false;
      this.selectCycle.disabled = false;
      this.selectVenue.disabled = false;
      this.selectTurn.disabled  = false;

      if(Object.keys(data).length){
        this.draw(data);
      }else{
          this.paintable.innerHTML = `<p class="beginning-no-results">No se encontraron resultados<p>`;
      }

    }.bind(this), 1000);
  }

  this.drawLoading = function()
  {
    this.paintable.innerHTML = this.loading;
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
