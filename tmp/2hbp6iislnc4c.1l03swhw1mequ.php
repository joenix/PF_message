<div class="cat-grid">
      <table>
            <thead>
                  <tr>
                        <th width="5%">id</th>
                        <th width="15%">title</th>
                        <th width="30%">content</th>
                        <th width="15%">time</th>
                        <th width="10%">author</th>
                        <th width="5%">audit</th>
                        <th width="20%">operat</th>
                  </tr>
            </thead>
            <tbody>
                  <?php foreach (($data?:array()) as $item): ?>
                        <tr>
                              <td align="center"><?php echo $item['id']; ?></td>
                              <td><div class="ellipsis-title" title="<?php echo $item['title']; ?>"><?php echo $item['title']; ?></div></td>
                              <td><div class="ellipsis-description" title="<?php echo $item['description']; ?>"><?php echo $item['description']; ?></div></td>
                              <td align="center"><?php echo $item['time']; ?></td>
                              <td align="center"><?php echo $item['author']; ?></td>
                              <td align="center"><?php echo $item['audit']; ?></td>
                              <td data-id="<?php echo $item['id']; ?>" data-audit="<?php echo $item['audit']; ?>" align="center">
                                    <a class="button button-raised button-tiny button-action" href="<?=host?>/msg?mode=edit&id=<?php echo $item['id']; ?>" target="_blank">编辑</a>
                                    <a class="button button-raised button-tiny button-highlight" href="<?=host?>/msg?mode=read&id=<?php echo $item['id']; ?>" target="_blank">查看</a>
                              </td>
                        </tr>
                  <?php endforeach; ?>
            </tbody>
      </table>
      <div class="cat-page"></div>
</div>
