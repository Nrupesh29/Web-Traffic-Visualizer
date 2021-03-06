/**
 *
 *  Copyright 2016 Netflix, Inc.
 *
 *     Licensed under the Apache License, Version 2.0 (the "License");
 *     you may not use this file except in compliance with the License.
 *     You may obtain a copy of the License at
 *
 *         http://www.apache.org/licenses/LICENSE-2.0
 *
 *     Unless required by applicable law or agreed to in writing, software
 *     distributed under the License is distributed on an "AS IS" BASIS,
 *     WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *     See the License for the specific language governing permissions and
 *     limitations under the License.
 *
 */
import _ from 'lodash';
import RegionConnection from '../region/regionConnection';
import FocusedNode from './focusedNode';
import LTRTreeLayout from '../layouts/ltrTreeLayout';
import TrafficGraph from '../base/trafficGraph';

class FocusedTrafficGraph extends TrafficGraph {
  constructor (name, mainView, parentGraph, graphWidth, graphHeight, Layout = LTRTreeLayout) {
    super(name, mainView, parentGraph, graphWidth, graphHeight, FocusedNode, RegionConnection, Layout);
    this.type = 'focused';
    this.linePrecision = 4;
  }

  manipulateState (state, parentState) {
    // set up the focused node
    const thisNode = _.cloneDeep(state);
    delete thisNode.renderer;
    thisNode.focused = true;

    // manipulate nodes and connections based on parent graph
    state.connections = _.filter(parentState.connections, connection => connection.source === state.name || connection.target === state.name);
    state.nodes = _.uniqBy(_.reduce(state.connections, (acc, connection) => {
      acc.push(_.clone(_.find(parentState.nodes, { name: connection.source })));
      acc.push(_.clone(_.find(parentState.nodes, { name: connection.target })));
      return acc;
    }, []), 'name');

    // replace focused node
    _.remove(state.nodes, node => node.name === thisNode.name);
    state.nodes.push(thisNode);

    // clean up new state
    state.nodes.forEach(node => delete node.renderer);
    state.maxVolume = state.maxVolume || _.get(this.parentGraph, ['volume', 'max'], 0);
  }

  setState (state, force) {
    super.setState(state, force);
    this.focusedNode = _.find(this.nodes, { focused: true });
  }

  handleIntersectedObjectClick () {
    if (!this.intersectedObject || (this.intersectedObject instanceof this.ConnectionClass)) {
      this.highlightObject(this.intersectedObject);
    }
  }

  handleIntersectedObjectDoubleClick () {
    if (this.intersectedObject && this.intersectedObject.graphRenderer === 'focused') {
      const graphIndex = this.graphIndex.slice(0, -1);
      graphIndex.push(this.intersectedObject.getName());
      this.emit('setView', graphIndex);
    }
  }
}

export default FocusedTrafficGraph;
