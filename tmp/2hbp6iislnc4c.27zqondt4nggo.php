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
                        <th width="10%">remark</th>
                        <th width="10%">operat</th>
                  </tr>
            </thead>
            <tbody>
                  <?php foreach (($data?:array()) as $item): ?>
                        <tr>
                              <td align="center"><?php echo $item['id']; ?></td>
                              <td><?php echo $item['title']; ?></td>
                              <td><?php echo $item['content']; ?></td>
                              <td align="center"><?php echo $item['time']; ?></td>
                              <td align="center"><?php echo $item['author']; ?></td>
                              <td align="center"><?php echo $item['audit']; ?></td>
                              <td><?php echo $item['remark']; ?></td>
                              <td data-id="<?php echo $item['id']; ?>" data-audit="<?php echo $item['audit']; ?>" align="center"></td>
                        </tr>
                  <?php endforeach; ?>
            </tbody>
      </table>
      <div class="cat-page"></div>
</div>
