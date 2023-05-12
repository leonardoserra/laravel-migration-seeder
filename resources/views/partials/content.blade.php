<div class="container">
      <div class="row">
            @foreach ($trains as $train)
                  <div class="col-3 mt-5 mb-5">
                        <div class="card" style="width: 18rem;">
                              <div class="card-header">
                                    Ditta: {{ $train['azienda'] }}
                              </div>
                              <ul class="list-group list-group-flush">
                                    <li class="list-group-item">
                                          Partenza da: {{ $train['stazione_di_partenza'] }}
                                    </li>
                                    <li class="list-group-item">
                                          Arrivo a: {{ $train['stazione_di_arrivo'] }}
                                    </li>
                                    <li class="list-group-item">
                                          Partenza ore: {{ $train['orario_di_partenza'] }}
                                    </li>
                                    <li class="list-group-item">
                                          Arrivo ore: {{ $train['orario_di_arrivo'] }}
                                    </li>
                                    <li class="list-group-item">
                                          Data di partenza: {{ $train['data_di_partenza'] }}
                                    </li>
                                    <li class="list-group-item">
                                          Codice Treno: {{ $train['codice_treno'] }}
                                    </li>
                                    <li class="list-group-item">
                                          Numero Vagoni: {{ $train['numero_carrozze'] }}
                                    </li>
                                    <li class="list-group-item">
                                          {{ $train['in_orario'] ? 'in orario' : 'in ritardo' }}
                                    </li>
                              </ul>
                              <div class="card-footer">
                                    {{ $train['cancellato'] ? 'cancellato' : 'regolare' }}
                              </div>
                        </div>
                  </div>
            @endforeach

      </div>
</div>
